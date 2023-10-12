<?php

namespace App\Http\Controllers;

use App\Models\Opcine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IsplateController extends Controller
{
    //
    public function index()
    {
        $isplate = DB::table('isplate')->get();
        return response()->json($isplate);
    }

    public function queryEntries($name, $query)
    {
        Log::info('queryEntries: ' . $query . ' ' . $name);

        $opcina =  Opcine::where('url', $name)->get();

        if (!$opcina) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $entriesQuery = $this->getAllEntriesFromOpcina($opcina);
        $results = $entriesQuery
            ->orWhere('isplate.naziv', 'LIKE', "%$query%")
            ->orWhere('isplate.adresa', 'LIKE', "%$query%")
            ->orWhere('isplate.mjesto', 'LIKE', "%$query%")
            ->get();

        return response()->json($results);
    }
    public function showEntries($name)
    {
        Log::info('showEntries: ' . $name);

        $opcina =  Opcine::where('url', $name)->get();

        if (!$opcina) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $entriesQuery = $this->getAllEntriesFromOpcina($opcina);
        $entries = $entriesQuery->get();

        return response()->json($entries);
    }

    private function getAllEntriesFromOpcina($opcina)
    {
        return DB::table('isplate')
            ->join('opcine', 'opcine.rkpid', '=', 'isplate.rkpid')
            ->where('isplate.rkpid', $opcina[0]->rkpid)
            ->select('isplate.*');
    }
}
