<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Schemas\User AS UserResource;

/**
 * Authentication controller
 */
class AuthController extends BaseController
{
    // Use a hard-coded device-name for now
    const device_name = 'auth_token';

    /**
     * @OA\Post(
     * path="/auth/register",
     * summary="Register an account",
     * description="Register by email, password",
     * operationId="authRegister",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","name","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="first_name", type="string", example="John"),
     *       @OA\Property(property="last_name", type="string", example="Doe"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *   response=200,
     *   description="OK"
     * ),
     * @OA\Response(
     *   response=422,
     *   description="Wrong credentials response",
     *   @OA\JsonContent(
     *     @OA\Property(property="message", type="string", example="User with this email already exists")
     *   )
     * )
     * )
     */
    public function create(Request $request)
    {
        // Validate request
        $validatedData = $request->validate([
            'email'      => 'required|string|email|max:255|unique:users',
            'first_name' => 'required|string|min:2|max:255',
            'last_name'  => 'required|string|min:2|max:255',
            'password'   => 'required|string|min:8|max:255',
        ]);

        // Create user obj
        $user = User::create([
            'email'      => $validatedData['email'],
            'first_name' => $validatedData['first_name'],
            'last_name'  => $validatedData['last_name'],
            'password'   => Hash::make($validatedData['password']),
        ]);
        $token = $user->createToken(self::device_name);

        // Return some basic info
        return [
            'access_token' => $token->plainTextToken,
            'token_type' => 'Bearer',
        ];
    }

    /**
     * @OA\Post(
     * path="/auth/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authLogin",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *   response=200,
     *   description="OK"
     * ),
     * @OA\Response(
     *   response=422,
     *   description="Wrong credentials response",
     *   @OA\JsonContent(
     *     @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *   )
     * )
     * )
     */
    public function login(Request $request)
    {
        // Validate data
        $validatedData = $request->validate([
            'email'    => 'required|string|email|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        // Get User if exists and check password.
        $user = User::where('email', $validatedData['email'])->first();

        if (! $user || ! Hash::check($validatedData['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => [__('auth.failed')],
            ]);
        }
        $token = $user->createToken(self::device_name);

        // Return some basic info
        return [
            'access_token' => $token->plainTextToken,
            'token_type' => 'Bearer',
        ];
    }

    /**
     * @OA\Post(
     * path="/auth/logout",
     * summary="Invalidate access token",
     * description="Invalidates the current used access token",
     * operationId="authLogout",
     * tags={"auth"},
     * security={{"bearerAuth":{}}},
     *
     * @OA\Response(
     *   response=201,
     *   description="OK"
     * ),
     * @OA\Response(
     *   response=422,
     *   description="Wrong credentials response",
     *   @OA\JsonContent(
     *     @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *   )
     * )
     * )
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }

    /**
     * @OA\Get(
     * path="/auth/me",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authMe",
     * tags={"auth"},
     * security={{"bearerAuth":{}}},
     *
     * @OA\Response(
     *   response=200,
     *   description="OK",
     *   @OA\JsonContent(ref="#/components/schemas/User"),
     * ),
     * @OA\Response(
     *   response=422,
     *   description="Not authenticated",
     *   @OA\JsonContent(
     *     @OA\Property(property="message", type="string", example="Not authenticated at all")
     *   )
     * )
     * )
     */
    public function me(Request $request)
    {
        $user = $request->user();
        return new UserResource($user);
    }

    /**
     * @OA\Post (
     *   tags={"auth"},
     *   operationId="authUserUpdate",
     *   security={{"bearerAuth":{}}},
     *   path="/auth/update",
     *   summary="Update current user info",
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/User"),
     *  ),
     *
     *   @OA\Response(response="200", description="OK", @OA\JsonContent(ref="#/components/schemas/User"),),
     * )
     */
    public function update(Request $request)
    {
        // Get current User
        $user = $request->user();

        // Validate data and update the model with it
        $data = $request->validate([
            'email'      => 'required|string|email|max:255',
            'first_name' => 'required|string|min:2|max:255',
            'last_name'  => 'required|string|min:2|max:255',
        ]);
        $user->fill($data);
        $user->save();

        // Return updated User object
        $user->refresh();
        return new UserResource($user);
    }

    /**
     * @OA\Post(
     * path="/auth/update-password",
     * summary="Update user password",
     * description="Updates the current logged in his/her password",
     * operationId="authUserUpdatePassword",
     * security={{"bearerAuth":{}}},
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="New credentials for the current user",
     *    @OA\JsonContent(
     *       required={"password_current","password_new"},
     *       @OA\Property(property="password_current", type="string", format="password", example="PassWord12345"),
     *       @OA\Property(property="password_new", type="string", format="password", example="DifferentPassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *   response=200,
     *   description="OK"
     * ),
     * @OA\Response(
     *   response=422,
     *   description="Wrong credentials response",
     *   @OA\JsonContent(
     *     @OA\Property(property="message", type="string", example="Current password is incorrect")
     *   )
     * )
     * )
     */
    public function updatePassword(Request $request)
    {
        // Get current User
        $user = $request->user();

        // Validate data
        $data = $request->validate([
            'password_current' => 'required|string|min:8|max:255',
            'password_new'     => 'required|string|min:8|max:255',
        ]);

        // Check current password
        if (! Hash::check($data['password_current'], $user->password)) {
            throw ValidationException::withMessages([
                'password_current' => ['Current password does not match the given password'],
            ]);
        }
//
//         abort_if(
//             $user->password !== Hash::make($data['password_current']),
//             403, // TODO should be 422
//             'Current password does not match the given password'
//         );

        // Update password and save
        $user->password = Hash::make($data['password_new']);
        $user->save();

        // Return updated User object
        $user->refresh();
        return new UserResource($user);
    }
}
