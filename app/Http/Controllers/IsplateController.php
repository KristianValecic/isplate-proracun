<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IsplateController extends Controller
{
    //
    public function index()
{
    $isplate = DB::table('isplate')->get();
    return response()->json($isplate);
}
}
