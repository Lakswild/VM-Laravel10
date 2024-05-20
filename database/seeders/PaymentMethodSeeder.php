<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'id' => 1,
                'company_id' => 1,
                'code' => 'A',
                'description' => 'Cash against document'
            ],
            [
                'id' => 2,
                'company_id' => 1,
                'code' => 'B',
                'description' => 'Bank Draft'
            ],
            [
                'id' => 3,
                'company_id' => 1,
                'code' => 'C',
                'description' => 'Cash'
            ],
            [
                'id' => 4,
                'company_id' => 1,
                'code' => 'D',
                'description' => 'Documents againts acceotance'
            ],
            [
                'id' => 5,
                'company_id' => 1,
                'code' => 'G',
                'description' => 'Giro'
            ],
            [
                'id' => 6,
                'company_id' => 1,
                'code' => 'K',
                'description' => 'SKBDN Sight'
            ],
            [
                'id' => 7,
                'company_id' => 1,
                'code' => 'P',
                'description' => 'L/C Upas'
            ],
            [
                'id' => 8,
                'company_id' => 1,
                'code' => 'S',
                'description' => 'L/C Sight'
            ],
            [
                'id' => 9,
                'company_id' => 1,
                'code' => 'T',
                'description' => 'Bank Transfer'
            ],
            [
                'id' => 10,
                'company_id' => 1,
                'code' => 'U',
                'description' => 'L/C Usance'
            ]
        ];

        collect($paymentMethods)->each(function ($paymentMethod) {
            $checkPaymentMethod = \App\Models\PaymentMethod::where('id', $paymentMethod['id'])->first();
            if ($checkPaymentMethod) {
                \App\Models\PaymentMethod::where('id', $paymentMethod['id'])->update($paymentMethod);
            } else {
                \App\Models\PaymentMethod::create($paymentMethod);
            }
        });
    }
}
