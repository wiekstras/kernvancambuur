<?php

namespace App\Schemas;

use Illuminate\Http\Request;

/**
 * User Schema
 *
 * @OA\Schema(
 *     title="User",
 *     description="Full User model",
 * )
 */
class User extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @OA\Property(
     *     property="id",
     *     type="integer",
     *     description="ID",
     *     title="ID",
     *     readOnly=true,
     * )
     * @OA\Property(
     *     property="first_name",
     *     type="string",
     *     description="First name",
     *     title="First name",
     * )
     * @OA\Property(
     *     property="last_name",
     *     type="string",
     *     description="Last name",
     *     title="Last name",
     * )
     * @OA\Property(
     *     property="email",
     *     type="string",
     *     description="Email",
     *     title="Email",
     * )
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
        ];
    }
}
