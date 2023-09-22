<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
