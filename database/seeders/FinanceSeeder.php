<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $finances = [
            [
                'id' => 1,
                'company_id' => 1,
                'code' => 'J1',
                'description' => 'Finance Jakarta'
            ],
            [
                'id' => 2,
                'company_id' => 1,
                'code' => 'T1',
                'description' => 'Finance Terbanggi'
            ],
            [
                'id' => 3,
                'company_id' => 1,
                'code' => 'W1',
                'description' => 'Finance Way Lunik'
            ]
        ];

        collect($finances)->each(function ($finance) {
            $checkFinance = \App\Models\Finance::where('id', $finance['id'])->first();
            if ($checkFinance) {
                \App\Models\Finance::where('id', $finance['id'])->update($finance);
            } else {
                \App\Models\Finance::create($finance);
            }
        });
    }
}
