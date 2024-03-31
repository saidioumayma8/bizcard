<?php

namespace App\Http\Controllers;

use App\Models\BuisnessCard;
use Illuminate\Http\Request;

class BusinessCardController extends Controller
{
public function list($id=null){
    return $id?BuisnessCard::find($id):buisnesscard::all();
}
}
