<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcine;

class OpcineController extends Controller
{
    public function index()
    {
        $opcine = Opcine::all();  // Fetch all records from the Opcine table
        return response()->json($opcine);
    }
}
