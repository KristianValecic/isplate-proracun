<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Opcine; // or Opcine, based on the correct model name
use App\Models\Isplate;  // This assumes the model's name is Isplate and it

class IsplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rkpids = Opcine::all()->pluck('rkpid')->toArray();
        foreach ($rkpids as $rkpid) {
            // Here we're creating one isplate entry for each opcine. Adjust as needed.
            Isplate::factory()->create(['rkpid' => $rkpid]);
        }
    }
}
