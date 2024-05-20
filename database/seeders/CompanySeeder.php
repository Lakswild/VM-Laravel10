<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'id' => 1,
                'type_id' => 1,
                'code' => '1000',
                'name' => 'GGP',
                'integrated_sap' => 1
            ],
            [
                'id' => 2,
                'type_id' => 1,
                'code' => '9050',
                'name' => 'NSA',
                'integrated_sap' => 0
            ],
        ];

        collect($companies)->each(function ($company) {
            $checkCompany = Company::where('id', $company['id'])->first();
            if ($checkCompany) {
                Company::where('id', $company['id'])->update($company);
            } else {
                Company::create($company);
            }
        });
    }
}
