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
        // $rkpids = Opcine::all()->pluck('rkpid')->toArray();
        // foreach ($rkpids as $rkpid) {
        //     // Here we're creating one isplate entry for each opcine. Adjust as needed.
        //     Isplate::factory()->create(['rkpid' => $rkpid]);
        // }
        $data = [
            [
                "id" => 1,
                "rkpid" => 35280,
                "datum" => "2023-08-01",
                "isplatiteljrkp" => 35280,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 2,
                "vrstarashoda" => "3111 Plaće za redovan rad",
                "opis" => "Plaća za kolovoz, 2023. godine",
                "primatelj" => "-",
                "oib" => "-",
                "mjesto" => "Stankovci",
                "iznos" => "17087.56"
            ],
            [
                "id" => 2,
                "rkpid" => 35280,
                "datum" => "2023-08-01",
                "isplatiteljrkp" => 35280,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 2,
                "vrstarashoda" => "3132 Doprinosi za obvezno zdravstveno osiguranje",
                "opis" => "Plaća za kolovoz, 2023. godine",
                "primatelj" => "-",
                "oib" => "-",
                "mjesto" => "Stankovci",
                "iznos" => "2643.61"
            ],
            [
                "id" => 3,
                "rkpid" => 35280,
                "datum" => "2023-08-31",
                "isplatiteljrkp" => 35280,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 1,
                "vrstarashoda" => "3221 Uredski materijal i ostali materijalni rashodi",
                "opis" => "",
                "primatelj" => "TAPESS d.o.o. ",
                "oib" => "22248533094",
                "mjesto" => "Kastav",
                "iznos" => "249.85"
            ],
            [
                "id" => 4,
                "rkpid" => 35280,
                "datum" => "2023-08-01",
                "isplatiteljrkp" => 35280,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 1,
                "vrstarashoda" => "3223 Energija",
                "opis" => "",
                "primatelj" => "HEP OPSKRBA d.o.o. ",
                "oib" => "63073332379",
                "mjesto" => "Zagreb",
                "iznos" => "5073.16"
            ],
            [
                "id" => 5,
                "rkpid" => 37164,
                "datum" => "2023-08-01",
                "isplatiteljrkp" => 37164,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 2,
                "vrstarashoda" => "3111 Plaće za redovan rad",
                "opis" => "Plaća za kolovoz, 2023. godine",
                "primatelj" => "-",
                "oib" => "-",
                "mjesto" => "Podcrkavlje",
                "iznos" => "7808.76"
            ],
            [
                "id" => 6,
                "rkpid" => 37164,
                "datum" => "2023-08-01",
                "isplatiteljrkp" => 37164,
                "isplatitelj" => "Općina Stankovci",
                "kategorija" => 2,
                "vrstarashoda" => "3132 Doprinosi za obvezno zdravstveno osiguranje",
                "opis" => "Plaća za kolovoz, 2023. godine",
                "primatelj" => "-",
                "oib" => "-",
                "mjesto" => "Podcrkavlje",
                "iznos" => "1.323.82"
            ],
            [
                "id" => 7,
                "rkpid" => 37164,
                "datum" => "2023-08-21",
                "isplatiteljrkp" => 51677,
                "isplatitelj" => "Dječji vrtić Bambi Podcrkavlje",
                "kategorija" => 1,
                "vrstarashoda" => "3223 Energija",
                "opis" => "",
                "primatelj" => "TAPESS d.o.o. ",
                "oib" => "22248533094",
                "mjesto" => "Kastav",
                "iznos" => "249.85"
            ],
            [
                "id" => 8,
                "rkpid" => 37164,
                "datum" => "2023-08-21",
                "isplatiteljrkp" => 51677,
                "isplatitelj" => "Dječji vrtić Bambi Podcrkavlje",
                "kategorija" => 2,
                "vrstarashoda" => "3237 Intelektualne i osobne usluge",
                "opis" => "Ugovor o djelu - izrada skulpture",
                "primatelj" => "Kipar Klesarović",
                "oib" => "-",
                "mjesto" => "Zagreb",
                "iznos" => "120703.00"
            ]
        ];
        DB::table('isplate')->insert($data);
    }
}
