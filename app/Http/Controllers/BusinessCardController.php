<?php

namespace App\Http\Controllers;

use App\Models\bisnicecard;
use Illuminate\Http\Request;

class BusinessCardController extends Controller
{
public function list(){
    return bisnicecard::all();
}
}
