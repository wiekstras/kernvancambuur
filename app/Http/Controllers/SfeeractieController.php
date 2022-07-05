<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


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
        // Still need to check for authenticated user first.

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ], SfeeractieController::messages());

        $newEvent = [
            'title' => $request['title'],
            'user_id' => 2, // Default for now
            'description' => $request['description'],
            'image_url' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        
        $model = Event::create($newEvent);

        $model->refresh();
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Event::where([
            'id' => $id,
        ])->firstOrFail();

        return $model;
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
        // Get requested News Blog obj
        $model = Event::where([
            'id' => $id,
        ])->firstOrFail();

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ], SfeeractieController::messages());

        $updateEvent = [
            'title' => $request['title'],
            'user_id' => 2, // Default for now
            'description' => $request['description'],
            'image_url' => '',
            'created_at' => $model->created_at,
            'updated_at' => Carbon::now()
        ];

        // Update the model with it
        $model->fill($updateEvent);
        $model->save();

        // Return updated News object
        $model->refresh();
        return $model;
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

    public function upload(Request $request, int $id)
    {
        $user = $request->user();

        Log::info($id);

        $event = Event::where([
            'id' => $id
        ])->firstOrFail();

         $request->validate([
            'file' => 'required|image:jpeg,jpg,png|max:10240|dimensions:min_width=500,min_height=280,max_width=6000,max_height=6000',
        ]);

        $folder = 'sfeeracties';
        $image  = $request->file('file');
        $path   = $image->store($folder, 'public');

        $event->image_url = $path;
        $event->save();

        return response()->json([
                'message' => true
            ]);
    }

    public static function messages($id = '')
    {
        return [
            'title.required' => 'Titel is verplicht.',
            'description.required' => 'beschrijving is verplicht.'
        ];
    }
}
