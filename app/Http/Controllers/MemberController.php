<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\BillingInfo;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MemberController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Member::with('address')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
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
            'account_number' => 'required',
            'amount' => 'required',
            'gender' => 'required',
            'terms' => 'required'
        ]);

        // Gender is an enum type in database that accepts m or v.
        if($request['gender'] == 'man')
            $request['gender'] = 'm';
        else
            $request['gender'] = 'v';

        $newMember = [
            'name' => $request['name'],
            'surname' => $request['surname'],
            'date_of_birth' => $request['date_of_birth'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $memberId = (new Member)->insertMember($newMember);
        if ($memberId != null)
        {
            $address = [
                'member_id' => $memberId,
                'address' => $request['address'],
                'postal_code' => $request['postal_code'],
                'residence' => $request['residence'],
                'phone' => $request['phone'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
            (new Address)->insertAddress($address);

            $billingInfo = [
                'member_id' => $memberId,
                'amount' => $request['amount'],
                'account_number' => $request['account_number']
            ];
            (new BillingInfo)->insertBillingInfo($billingInfo);
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
        return Member::with('address','billingInfo')->where('id',[$id])->get();
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
     * @param  \Illuminate\Http\Request  $request
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
        DB::delete('delete from members where id = ?',[$id]);
    }
}
