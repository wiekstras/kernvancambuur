<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class SfeeractieController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at', 'DESC')->get();
        foreach($events as $event)
        {
            $event->image = ! empty($event->image_url) ? Storage::disk('public')->url($event->image_url) : '';
        }

        return response()->json([
                'message' => $events
            ]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
            'description' => 'required'
        ], SfeeractieController::messages());

        $path = $request->file('file')->store(
            'pictures', 'public'
        );

        $newEvent = [
            'title' => $request['title'],
            'user_id' => 2, // Default for now
            'image_url' => $path,
            'description' => $request['description'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        $result = '';
        try 
        {
            $result = (new Event)->insertEvent($newEvent);
        } catch (Exception $e) {   
            $result = $e->message();
        }

        return response()->json([
                'message' => $result
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
        //
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
        //
    }

    public static function messages($id = '')
    {
        return [
            'title.required' => 'Titel is verplicht.',
            'file.required' => 'foto is verplicht.',
            'description.required' => 'beschrijving is verplicht.'
        ];
    }
}
