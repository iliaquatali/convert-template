<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request)
    {
        return Member::with('getGroup')->get ();
    }
}
