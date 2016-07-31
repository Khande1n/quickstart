<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BrainController extends Controller
{    
/**
     * Modify the data from the storyline and respond.
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storyline($request=null, $response=null)
    {

        return response()->json(['profileName ' => 'nikhil', 'email' => 'CA'])->setCallback('myData');
	}

    /**
     * Show the articulate mainpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function story()
    {
        return view('story');
    }
}
