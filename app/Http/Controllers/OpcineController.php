<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcine;
use Illuminate\Support\Facades\Log; // or Opcine, based on the correct model name

class OpcineController extends Controller
{
    public function index()
    {
        $opcine = Opcine::all();  // Fetch all records from the Opcine table
        return response()->json($opcine);
    }
    public function getOpcina($name)
    {
        Log::info('Showing user profile for user: ' . $name);
        $opcine = Opcine::where('naziv', 'like', '%' . $name . '%')
            ->get();  // Fetch all records from the Opcine table
        return response()->json($opcine);
    }
}
