<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index(Request $request) {
        $position = null;
        
        if (config('app.log_visitors')) {
            try {
                $position = Location::get();

                Visitor::create([
                    'ip' => $position->ip,
                    'country' => $position->countryName,
                    'region' => $position->regionName,
                    'city' => $position->cityName,
                    'latitude' => $position->latitude,
                    'longitude' => $position->longitude
                ]);
            } catch (\Exception $e) {

            }
        }

        return view('welcome')->with([
            'position' => $position
        ]);
    }
}
