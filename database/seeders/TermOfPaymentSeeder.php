<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermOfPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $termOfPayments = [
            [
                'id' => 1,
                'code' => 'A007',
                'description' => 'Cash against documents 7 days',
                'company_id' => 1
            ],
            [
                'id' => 2,
                'code' => 'A014',
                'description' => 'Cash against documents 14 days',
                'company_id' => 1
            ],
            [
                'id' => 3,
                'code' => 'A015',
                'description' => 'Cash against documents 15 days',
                'company_id' => 1
            ],
            [
                'id' => 4,
                'code' => 'A021',
                'description' => 'Cash against documents 21 days',
                'company_id' => 1
            ],
            [
                'id' => 5,
                'code' => 'A030',
                'description' => 'Cash against documents 30 days',
                'company_id' => 1
            ],
            [
                'id' => 6,
                'code' => 'A035',
                'description' => 'Cash against documents 35 days',
                'company_id' => 1
            ],
            [
                'id' => 7,
                'code' => 'A045',
                'description' => 'Cash against documents 45 days',
                'company_id' => 1
            ],
            [
                'id' => 8,
                'code' => 'A060',
                'description' => 'Cash against documents 60 days',
                'company_id' => 1
            ],
            [
                'id' => 9,
                'code' => 'A090',
                'description' => 'Cash against documents 90 days',
                'company_id' => 1
            ],
            [
                'id' => 10,
                'code' => 'A120',
                'description' => 'Cash against documents 120 days',
                'company_id' => 1
            ],
            [
                'id' => 11,
                'code' => 'A180',
                'description' => 'Cash against documents 180 days',
                'company_id' => 1
            ],
            [
                'id' => 12,
                'code' => 'B007',
                'description' => 'Bank Draft 7 days',
                'company_id' => 1
            ],
            [
                'id' => 13,
                'code' => 'B014',
                'description' => 'Bank Draft 14 days',
                'company_id' => 1
            ],
            [
                'id' => 14,
                'code' => 'B015',
                'description' => 'Bank Draft 15 days',
                'company_id' => 1
            ],
            [
                'id' => 15,
                'code' => 'B021',
                'description' => 'Bank Draft 21 days',
                'company_id' => 1
            ],
            [
                'id' => 16,
                'code' => 'B030',
                'description' => 'Bank Draft 30 days',
                'company_id' => 1
            ],
            [
                'id' => 17,
                'code' => 'B035',
                'description' => 'Bank Draft 35 days',
                'company_id' => 1
            ],
            [
                'id' => 18,
                'code' => 'B045',
                'description' => 'Bank Draft 45 days',
                'company_id' => 1
            ],
            [
                'id' => 19,
                'code' => 'B060',
                'description' => 'Bank Draft 60 days',
                'company_id' => 1
            ],
            [
                'id' => 20,
                'code' => 'B075',
                'description' => 'Bank Draft 75 days',
                'company_id' => 1
            ],
            [
                'id' => 21,
                'code' => 'B090',
                'description' => 'Bank Draft 90 days',
                'company_id' => 1
            ],
            [
                'id' => 22,
                'code' => 'B120',
                'description' => 'Bank Draft 120 days',
                'company_id' => 1
            ],
            [
                'id' => 23,
                'code' => 'B180',
                'description' => 'Bank Draft 180 days',
                'company_id' => 1
            ],
            [
                'id' => 24,
                'code' => 'C000',
                'description' => 'Cash',
                'company_id' => 1
            ],
            [
                'id' => 25,
                'code' => 'CAD',
                'description' => 'Sight',
                'company_id' => 1
            ],
            [
                'id' => 26,
                'code' => 'D007',
                'description' => 'Doc. Against Acceptance 7 days',
                'company_id' => 1
            ],
            [
                'id' => 27,
                'code' => 'D014',
                'description' => 'Doc. Against Acceptance 14 days',
                'company_id' => 1
            ],
            [
                'id' => 28,
                'code' => 'D015',
                'description' => 'Doc. Against Acceptance 15 days',
                'company_id' => 1
            ],
            [
                'id' => 29,
                'code' => 'D021',
                'description' => 'Doc. Against Acceptance 21 days',
                'company_id' => 1
            ],
            [
                'id' => 30,
                'code' => 'D030',
                'description' => 'Doc. Against Acceptance 30 days',
                'company_id' => 1
            ],
            [
                'id' => 31,
                'code' => 'D035',
                'description' => 'Doc. Against Acceptance 35 days',
                'company_id' => 1
            ],
            [
                'id' => 32,
                'code' => 'D045',
                'description' => 'Doc. Against Acceptance 45 days',
                'company_id' => 1
            ],
            [
                'id' => 33,
                'code' => 'D060',
                'description' => 'Doc. Against Acceptance 60 days',
                'company_id' => 1
            ],
            [
                'id' => 34,
                'code' => 'D075',
                'description' => 'Doc. Against Acceptance 75 days',
                'company_id' => 1
            ],
            [
                'id' => 35,
                'code' => 'D090',
                'description' => 'Doc. Against Acceptance 90 days',
                'company_id' => 1
            ],
            [
                'id' => 36,
                'code' => 'D120',
                'description' => 'Doc. Against Acceptance 120 days',
                'company_id' => 1
            ],
            [
                'id' => 37,
                'code' => 'D180',
                'description' => 'Doc. Against Acceptance 180 days',
                'company_id' => 1
            ],
            [
                'id' => 38,
                'code' => 'E030',
                'description' => '30 days On Credit',
                'company_id' => 1
            ],
            [
                'id' => 39,
                'code' => 'G000',
                'description' => 'Giro Immediate',
                'company_id' => 1
            ],
            [
                'id' => 40,
                'code' => 'G007',
                'description' => 'Giro 7 days',
                'company_id' => 1
            ],
            [
                'id' => 41,
                'code' => 'G014',
                'description' => 'Giro 14 days',
                'company_id' => 1
            ],
            [
                'id' => 42,
                'code' => 'G015',
                'description' => 'Giro 15 days',
                'company_id' => 1
            ],
            [
                'id' => 43,
                'code' => 'G021',
                'description' => 'Giro 21 days',
                'company_id' => 1
            ],
            [
                'id' => 44,
                'code' => 'G030',
                'description' => 'Giro 30 days',
                'company_id' => 1
            ],
            [
                'id' => 45,
                'code' => 'G035',
                'description' => 'Giro 35 days',
                'company_id' => 1
            ],
            [
                'id' => 46,
                'code' => 'G045',
                'description' => 'Giro 45 days',
                'company_id' => 1
            ],
            [
                'id' => 47,
                'code' => 'G060',
                'description' => 'Giro 60 days',
                'company_id' => 1
            ],
            [
                'id' => 48,
                'code' => 'G075',
                'description' => 'Giro 75 days',
                'company_id' => 1
            ],
            [
                'id' => 49,
                'code' => 'G090',
                'description' => 'Giro 90 days',
                'company_id' => 1
            ],
            [
                'id' => 50,
                'code' => 'G120',
                'description' => 'Giro 120 days',
                'company_id' => 1
            ],
            [
                'id' => 51,
                'code' => 'G180',
                'description' => 'Giro 180 days',
                'company_id' => 1
            ],
            [
                'id' => 52,
                'code' => 'K000',
                'description' => 'SKBDN Sight 0 days',
                'company_id' => 1
            ],
            [
                'id' => 53,
                'code' => 'P007',
                'description' => 'L/C Upas 7 days',
                'company_id' => 1
            ],
            [
                'id' => 54,
                'code' => 'P014',
                'description' => 'L/C Upas 14 days',
                'company_id' => 1
            ],
            [
                'id' => 55,
                'code' => 'P015',
                'description' => 'L/C Upas 15 days',
                'company_id' => 1
            ],
            [
                'id' => 56,
                'code' => 'P021',
                'description' => 'L/C Upas 21 days',
                'company_id' => 1
            ],
            [
                'id' => 57,
                'code' => 'P030',
                'description' => 'L/C Upas 30 days',
                'company_id' => 1
            ],
            [
                'id' => 58,
                'code' => 'P035',
                'description' => 'L/C Upas 35 days',
                'company_id' => 1
            ],
            [
                'id' => 59,
                'code' => 'P045',
                'description' => 'L/C Upas 45 days',
                'company_id' => 1
            ],
            [
                'id' => 60,
                'code' => 'P060',
                'description' => 'L/C Upas 60 days',
                'company_id' => 1
            ],
            [
                'id' => 61,
                'code' => 'P075',
                'description' => 'L/C Upas 75 days',
                'company_id' => 1
            ],
            [
                'id' => 62,
                'code' => 'P090',
                'description' => 'L/C Upas 90 days',
                'company_id' => 1
            ],
            [
                'id' => 63,
                'code' => 'P120',
                'description' => 'L/C Upas 120 days',
                'company_id' => 1
            ],
            [
                'id' => 64,
                'code' => 'P180',
                'description' => 'L/C Upas 180 days',
                'company_id' => 1
            ],
            [
                'id' => 65,
                'code' => 'S007',
                'description' => 'L/C Sight 7 days',
                'company_id' => 1
            ],
            [
                'id' => 66,
                'code' => 'S014',
                'description' => 'L/C Sight 14 days',
                'company_id' => 1
            ],
            [
                'id' => 67,
                'code' => 'S015',
                'description' => 'L/C Sight 15 days',
                'company_id' => 1
            ],
            [
                'id' => 68,
                'code' => 'S021',
                'description' => 'L/C Sight 21 days',
                'company_id' => 1
            ],
            [
                'id' => 69,
                'code' => 'S030',
                'description' => 'L/C Sight 30 days',
                'company_id' => 1
            ],
            [
                'id' => 70,
                'code' => 'S035',
                'description' => 'L/C Sight 35 days',
                'company_id' => 1
            ],
            [
                'id' => 71,
                'code' => 'S045',
                'description' => 'L/C Sight 45 days',
                'company_id' => 1
            ],
            [
                'id' => 72,
                'code' => 'S060',
                'description' => 'L/C Sight 60 days',
                'company_id' => 1
            ],
            [
                'id' => 73,
                'code' => 'S075',
                'description' => 'L/C Sight 75 days',
                'company_id' => 1
            ],
            [
                'id' => 74,
                'code' => 'S090',
                'description' => 'L/C Sight 90 days',
                'company_id' => 1
            ],
            [
                'id' => 75,
                'code' => 'S120',
                'description' => 'L/C Sight 120 days',
                'company_id' => 1
            ],
            [
                'id' => 76,
                'code' => 'S180',
                'description' => 'L/C Sight 180 days',
                'company_id' => 1
            ],
            [
                'id' => 77,
                'code' => 'T000',
                'description' => 'Bank Transfer Immediate',
                'company_id' => 1
            ],
            [
                'id' => 78,
                'code' => 'T007',
                'description' => 'Bank Transfer 7 days',
                'company_id' => 1
            ],
            [
                'id' => 79,
                'code' => 'T014',
                'description' => 'Bank Transfer 14 days',
                'company_id' => 1
            ],
            [
                'id' => 80,
                'code' => 'T015',
                'description' => 'Bank Transfer 15 days',
                'company_id' => 1
            ],
            [
                'id' => 81,
                'code' => 'T021',
                'description' => 'Bank Transfer 21 days',
                'company_id' => 1
            ],
            [
                'id' => 82,
                'code' => 'T030',
                'description' => 'Bank Transfer 30 days',
                'company_id' => 1
            ],
            [
                'id' => 83,
                'code' => 'T035',
                'description' => 'Bank Transfer 35 days',
                'company_id' => 1
            ],
            [
                'id' => 84,
                'code' => 'T045',
                'description' => 'Bank Transfer 45 days',
                'company_id' => 1
            ],
            [
                'id' => 85,
                'code' => 'T060',
                'description' => 'Bank Transfer 60 days',
                'company_id' => 1
            ],
            [
                'id' => 86,
                'code' => 'T075',
                'description' => 'Bank Transfer 75 days',
                'company_id' => 1
            ],
            [
                'id' => 87,
                'code' => 'T090',
                'description' => 'Bank Transfer 90 days',
                'company_id' => 1
            ],
            [
                'id' => 88,
                'code' => 'T100',
                'description' => '100% Prepayment',
                'company_id' => 1
            ],
            [
                'id' => 89,
                'code' => 'T120',
                'description' => 'Bank Transfer 120 days',
                'company_id' => 1
            ],
            [
                'id' => 90,
                'code' => 'T150',
                'description' => 'Bank Transfer 150 days',
                'company_id' => 1
            ],
            [
                'id' => 91,
                'code' => 'T180',
                'description' => 'Bank Transfer 180 days',
                'company_id' => 1
            ],
            [
                'id' => 92,
                'code' => 'T210',
                'description' => 'Bank Transfer 210 days',
                'company_id' => 1
            ],
            [
                'id' => 93,
                'code' => 'T240',
                'description' => 'Bank Transfer 240 days',
                'company_id' => 1
            ],
            [
                'id' => 94,
                'code' => 'U007',
                'description' => 'L/C Usance 7 days',
                'company_id' => 1
            ],
            [
                'id' => 95,
                'code' => 'U014',
                'description' => 'L/C Usance 14 days',
                'company_id' => 1
            ],
            [
                'id' => 96,
                'code' => 'U015',
                'description' => 'L/C Usance 15 days',
                'company_id' => 1
            ],
            [
                'id' => 97,
                'code' => 'U021',
                'description' => 'L/C Usance 21 days',
                'company_id' => 1
            ],
            [
                'id' => 98,
                'code' => 'U030',
                'description' => 'L/C Usance 30 days',
                'company_id' => 1
            ],
            [
                'id' => 99,
                'code' => 'U035',
                'description' => 'L/C Usance 35 days',
                'company_id' => 1
            ],
            [
                'id' => 100,
                'code' => 'U045',
                'description' => 'L/C Usance 45 days',
                'company_id' => 1
            ],
            [
                'id' => 101,
                'code' => 'U060',
                'description' => 'L/C Usance 60 days',
                'company_id' => 1
            ],
            [
                'id' => 102,
                'code' => 'U075',
                'description' => 'L/C Usance 75 days',
                'company_id' => 1
            ],
            [
                'id' => 103,
                'code' => 'U090',
                'description' => 'L/C Usance 90 days',
                'company_id' => 1
            ],
            [
                'id' => 104,
                'code' => 'U120',
                'description' => 'L/C Usance 120 days',
                'company_id' => 1
            ],
            [
                'id' => 105,
                'code' => 'U180',
                'description' => 'L/C Usance 180 days',
                'company_id' => 1
            ],
        ];

        collect($termOfPayments)->each(function ($termOfPayment) {
            $checkTermOfPayment = \App\Models\TermOfPayment::where('id', $termOfPayment['id'])->first();
            if ($checkTermOfPayment) {
                \App\Models\TermOfPayment::where('id', $termOfPayment['id'])->update($termOfPayment);
            } else {
                \App\Models\TermOfPayment::create($termOfPayment);
            }
        });
    }
}
