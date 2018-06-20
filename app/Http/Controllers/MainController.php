<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Continent;
use App\Country;
use App\City;

class MainController extends Controller
{
    public function home(){
        pagetitle('Welcome to our Homepage');
        return view('home');
    }

    public function continent($name){
        pagetitle($name);
        $continent = Continent::where('name', $name)->first();
        return view('continent', compact('continent'));
    }

     public function country($name){
        pagetitle($name);
        $country = Country::where('name', $name)->first();
        return view('country', compact('country'));
    }

     public function city($name){
        pagetitle($name);
        $city = City::where('name', $name)->first();
        return view('city', compact('city'));
    }
}
