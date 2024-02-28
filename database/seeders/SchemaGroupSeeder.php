<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchemaGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schemaVendors = [
            [
                'id' => 1,
                'company_id' => 1,
                'code' => '01',
                'description' => 'Schema Vendor Domestik (Lokal)'
            ],
            [
                'id' => 2,
                'company_id' => 1,
                'code' => '02',
                'description' => 'Schema Vendor Import'
            ],
            [
                'id' => 3,
                'company_id' => 1,
                'code' => '03',
                'description' => 'Schema Vendor PPIS'
            ],
            [
                'id' => 4,
                'company_id' => 1,
                'code' => '04',
                'description' => 'Schema Vendor Subcon'
            ],
            [
                'id' => 5,
                'company_id' => 1,
                'code' => '09',
                'description' => 'Schema Grp Interchangeable Mtl'
            ],
            [
                'id' => 6,
                'company_id' => 1,
                'code' => '10',
                'description' => 'Spec 2000M Schema Group'
            ],
            [
                'id' => 7,
                'company_id' => 1,
                'code' => 'NF',
                'description' => 'NF Metals'
            ]
        ];

        collect($schemaVendors)->each(function ($schemaVendor) {
            $checkSchemaVendor = \App\Models\SchemaGroup::where('id', $schemaVendor['id'])->first();
            if ($checkSchemaVendor) {
                \App\Models\SchemaGroup::where('id', $schemaVendor['id'])->update($schemaVendor);
            } else {
                \App\Models\SchemaGroup::create($schemaVendor);
            }
        });
    }
}
