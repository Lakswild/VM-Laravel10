<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'id' => 1,
                'code' => '01',
                'name' => 'DKI Jakarta',
                'country_id' => 101
            ],
            [
                'id' => 2,
                'code' => '02',
                'name' => 'Jawa Barat',
                'country_id' => 101
            ],
            [
                'id' => 3,
                'code' => '03',
                'name' => 'Jawa Tengah',
                'country_id' => 101
            ],
            [
                'id' => 4,
                'code' => '04',
                'name' => 'Jawa Timur',
                'country_id' => 101
            ],
            [
                'id' => 5,
                'code' => '05',
                'name' => 'DI Yogyakarta',
                'country_id' => 101
            ],
            [
                'id' => 6,
                'code' => '06',
                'name' => 'DI Aceh',
                'country_id' => 101
            ],
            [
                'id' => 7,
                'code' => '07',
                'name' => 'Sumatera Utara',
                'country_id' => 101
            ],
            [
                'id' => 8,
                'code' => '08',
                'name' => 'Sumatera Barat',
                'country_id' => 101
            ],
            [
                'id' => 9,
                'code' => '09',
                'name' => 'Riau',
                'country_id' => 101,
            ],
            [
                'id' => 10,
                'code' => '10',
                'name' => 'Jambi',
                'country_id' => 101
            ],
            [
                'id' => 11,
                'code' => '11',
                'name' => 'Sumatera Selatan',
                'country_id' => 101
            ],
            [
                'id' => 12,
                'code' => '12',
                'name' => 'Bengkulu',
                'country_id' => 101
            ],
            [
                'id' => 13,
                'code' => '13',
                'name' => 'Propinsi Lampung',
                'country_id' => 101
            ],
            [
                'id' => 14,
                'code' => '14',
                'name' => 'Kalimantan Selatan',
                'country_id' => 101
            ],
            [
                'id' => 15,
                'code' => '15',
                'name' => 'Kalimantan Barat',
                'country_id' => 101
            ],
            [
                'id' => 16,
                'code' => '16',
                'name' => 'Kalimantan Tengah',
                'country_id' => 101
            ],
            [
                'id' => 17,
                'code' => '17',
                'name' => 'Kalimantan Timur',
                'country_id' => 101
            ],
            [
                'id' => 18,
                'code' => '18',
                'name' => 'Sulawesi Selatan',
                'country_id' => 101
            ],
            [
                'id' => 19,
                'code' => '19',
                'name' => 'Sulawesi Tenggara',
                'country_id' => 101
            ],
            [
                'id' => 20,
                'code' => '20',
                'name' => 'Sulawesi Tengah',
                'country_id' => 101
            ],
            [
                'id' => 21,
                'code' => '21',
                'name' => 'Sulawesi Utara',
                'country_id' => 101
            ],
            [
                'id' => 22,
                'code' => '22',
                'name' => 'Bali',
                'country_id' => 101
            ],
            [
                'id' => 23,
                'code' => '23',
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 101
            ],
            [
                'id' => 24,
                'code' => '24',
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 101
            ],
            [
                'id' => 25,
                'code' => '25',
                'name' => 'Maluku',
                'country_id' => 101
            ],
            [
                'id' => 26,
                'code' => '26',
                'name' => 'Irian Jaya',
                'country_id' => 101
            ],
            [
                'id' => 26,
                'code' => '27',
                'name' => 'Timor Timur',
                'country_id' => 101
            ]
        ];


        collect($regions)->each(function ($region) {
            $checkRegion = Region::where('id', $region['id'])->first();
            if ($checkRegion) {
                Region::where('id', $region['id'])->update($region);
            } else {
                Region::create($region);
            }
        });
    }
}
