<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends BaseController
{
    public function index()
        {
            // If in production mode, assume the npm build cmd is executed andpen the index.html file
            if (\App::environment(['production', 'staging'])) {
                return \File::get(public_path() . '/index.html');
            }

            // For development purposes use a redirect to the vue app
            return redirect()->away('http://localhost:3000');
        }
}
