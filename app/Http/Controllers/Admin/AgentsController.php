<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentsController extends Controller
{
    function getAllAgents(){
        return view('admin.agents');
    }

    function createAgent(){
        return view('admin.create_new_agent');
    }
}
