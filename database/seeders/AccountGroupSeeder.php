<?php

namespace Database\Seeders;

use App\Models\AccountGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountGroups = [
            [
                'id' => 1,
                'code' => 'Z010',
                'description' => 'Foreign Vendor',
                'company_id' => 1
            ],
            [
                'id' => 2,
                'code' => 'Z020',
                'description' => 'Domestic Vendor (Jakarta)',
                'company_id' => 1
            ],
            [
                'id' => 3,
                'code' => 'Z120',
                'description' => 'Domestic Vendor (Lampung)',
                'company_id' => 1
            ],
            [
                'id' => 4,
                'code' => 'Z900',
                'description' => 'One Time Vendor',
                'company_id' => 1
            ],
        ];

        collect($accountGroups)->each(function ($accountGroup) {
            $checkCompany = AccountGroup::where('id', $accountGroup['id'])->first();
            if ($checkCompany) {
                AccountGroup::where('id', $accountGroup['id'])->update($accountGroup);
            } else {
                AccountGroup::create($accountGroup);
            }
        });
    }
}
