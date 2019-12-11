<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function getAllCountries()
    {
        $countries = Country::get()->toJson(JSON_PRETTY_PRINT);
        return response($countries, 200);
    }
 
    public function getPhoneCode($country)
    {
        if(Country::where('name', $country)->exists()){
            $countries = Country::where('name', $country)->get()->toJson(JSON_PRETTY_PRINT);
        return response($countries, 200);
        }else{
            return response()->json(["message" => "PhoneCode not found"], 404);
        }
    }
}
