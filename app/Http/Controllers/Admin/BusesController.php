<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusesController extends Controller
{
    function getAllBuses(){
        return view('admin.buses');
    }

    function createBus(){
        return view('admin.create_new_bus');
    }
}
