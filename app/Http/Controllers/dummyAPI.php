<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"anil", "email"=>"anil@gmail.com", "address"=>"delhi",];
    }
}
