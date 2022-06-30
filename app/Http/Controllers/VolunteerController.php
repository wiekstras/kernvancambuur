<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VolunteerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Volunteer::with('address')->get();
    }

    /**
     * Validates the request and adds it to the database.
     * Returns 1 if database returns no errors.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'address' => 'required',
            'residence' => 'required',
            'postal_code' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'terms' => 'required'
        ]);

        // Gender is an enum type in database that accepts m or v.
        if($request['gender'] == 'man')
            $request['gender'] = 'm';
        else
            $request['gender'] = 'v';

        // Add values to Volunteer properties
        $newVolunteer = [
            'name' => $request['name'],
            'surname' => $request['surname'],
            'date_of_birth' => $request['date_of_birth'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        // Inserts address of volunteer when volunteer itself is inserted successfully.
        $volunteerId = (new Volunteer)->insertVolunteer($newVolunteer);
        if ($volunteerId != null)
        {
            $address = [
                'volunteer_id' => $volunteerId,
                'address' => $request['address'],
                'postal_code' => $request['postal_code'],
                'residence' => $request['residence'],
                'phone' => $request['phone'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            (new Address)->insertAddress($address);
        }

        /*
         * Returns a JSON response if data is added to database or internal server error if not.
         * Need to change the return values, but it will work for now.
        */
        return response()->json([
            'message'=> 1
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Volunteer::with('address',)->where('id',[$id])->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from volunteers where id = ?',[$id]);
    }
}
