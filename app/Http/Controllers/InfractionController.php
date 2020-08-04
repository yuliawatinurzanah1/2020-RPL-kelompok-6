<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\infractions;

class InfractionController extends Controller
{
    public function index()
    {
    	return view('infractions');
    }

     public function save(Request $request)
    {
    	//dd($request);
 	$Infraction = new Infraction;
 	$Infraction ->name  = $request->input('name');
 	$Infraction ->point = $request->input('point');
 	$Infraction ->save();
 	return redirect('/infractions');

	}

   
}
