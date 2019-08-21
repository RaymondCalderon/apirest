<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactSourceController extends Controller
{
    //
    public function show($id){
        return ContactSource:where('id',$id)->get();
    }
}
