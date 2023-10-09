<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Opcine;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //php artisan serve
    public function showEntries($name)
    {
        Log::info("Opcina ime: $name");

        $opcina =  Opcine::where('url', $name)->get();

        Log::info('Opcina:');
        Log::info($opcina);

        if (!$opcina) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $entriesQuery = DB::table('isplate')
            ->join('opcine', 'opcine.rkpid', '=', 'isplate.rkpid')
            ->where('isplate.rkpid', $opcina[0]->rkpid)
            ->select('isplate.*');

        // Conditionally add the where clause if userId is not 'all'
        if ($name !== 'all') {
            // add query param
            // DB::table('opcine')->where('url', $name); 
        }

        $entries = $entriesQuery->get();

        Log::info('entries:');
        Log::info($entries);
        return response()->json($entries);
    }
}
