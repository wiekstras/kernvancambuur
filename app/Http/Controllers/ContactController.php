<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Contact;

class ContactController extends BaseController {
    // Store Contact Form data
    public function store(Request $request) : JsonResponse {
        // Form validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);

         $newMessage = [
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ];

        //  Store data in database
        (new Contact)->insertContactMessage($newMessage);

        return response()->json([
            'message'=> 1
        ]);
    }
}