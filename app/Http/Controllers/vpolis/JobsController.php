<?php

namespace App\Http\Controllers\vpolis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function index()
    {
        return view('vpolis.jobs');
    }
}
