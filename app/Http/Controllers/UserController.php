<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Opcine;
use Illuminate\Support\Facades\Log;

class   UserController extends Controller
{
    //php artisan serve
    public function showEntries($name)
    {
        Log::info('Opcina ime:');
        Log::info($name);

        // Map the username to the correct user ID
        // $userMapping = [
        //     'opcina-stankovci' => 35280,
        //     'opcina-podcrkavlje' => 37164,
        //     // Add more mappings if needed
        //     // 'another-username' => 71,
        //     'all' => 'all', // Add this to recognize the 'all' keyword
        // ];

        // $rkpid = $userMapping[$name] ?? null;
        $opcina =  Opcine::where('url', $name)->get();

        Log::info('Opcina:');
        Log::info($opcina);

        if (!$opcina) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $query = DB::table('opcine');

        // Conditionally add the where clause if userId is not 'all'
        if ($name !== 'all') {
            $query->where('url', $name); // add query param
        }

        $entries = $query->get();
        dd($entries);
        return response()->json($entries);
    }
}
