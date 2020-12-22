<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;

class PublisherController extends Controller
{
    
    public function index(){
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

}
