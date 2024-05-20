<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'id' => 1,
                'type' => 'Company'
            ],
            [
                'id' => 2,
                'type' => 'Perorangan'
            ],
            [
                'id' => 3,
                'type' => 'Yayasan'
            ],
            [
                'id' => 4,
                'type' => 'Koperasi'
            ],
            [
                'id' => 5,
                'type' => 'Pemerintah'
            ],
        ];

        collect($types)->each(function ($type) {
            $checkType = Type::where('id', $type['id'])->first();
            if ($checkType) {
                Type::where('id', $type['id'])->update($type);
            } else {
                Type::create($type);
            }
        });
    }
}
