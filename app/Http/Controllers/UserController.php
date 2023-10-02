<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class   UserController extends Controller
{
    //php artisan serve
    public function showEntries($rkpid)
    {
        // Map the username to the correct user ID
        $userMapping = [
            '35280' => 35280,
            // Add more mappings if needed
            // 'another-username' => 71,
            'all' => 'all', // Add this to recognize the 'all' keyword
        ];

        $rkpid = $userMapping[$rkpid] ?? null;

        // dd($rkpid);
        if (!$rkpid) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $query = DB::table('opcine');

        // Conditionally add the where clause if userId is not 'all'
        if ($rkpid !== 'all') {
            $query->where('rkpid', $rkpid);
        }

        $entries = $query->get();
        dd($entries);
        return response()->json($entries);
    }
}
