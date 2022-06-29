<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Contact;
use Mail;
use Illuminate\Support\Facades\DB;


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

         //  Send mail to admin
         Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('gbussel58@gmail.com', 'Admin')->subject($request->get('subject'));
        });
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        DB::delete('delete from contacts where id = ?',[$id]);
    }

    public function latest()
    {
        return DB::table('contacts')->orderBy('created_at', 'desc')->get();
    }
}