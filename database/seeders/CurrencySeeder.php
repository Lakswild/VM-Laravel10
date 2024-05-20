<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'id' => 1,
                'code' => 'ESP',
                'name' => 'Spanish Peseta'
            ],
            [
                'id' => 2,
                'code' => 'ETB',
                'name' => 'Ethiopian Birr'
            ],
            [
                'id' => 3,
                'code' => 'EUR',
                'name' => 'European Euro'
            ],
            [
                'id' => 4,
                'code' => 'EUR4',
                'name' => 'European Euro'
            ],
            [
                'id' => 5,
                'code' => 'EURN',
                'name' => '(Internal) European Euro (5 Dec.)'
            ],
            [
                'id' => 6,
                'code' => 'FIM',
                'name' => 'Finnish markka'
            ],
            [
                'id' => 7,
                'code' => 'FJD',
                'name' => 'Fiji Dollar'
            ],
            [
                'id' => 8,
                'code' => 'FKP',
                'name' => 'Falkland Pound'
            ],
            [
                'id' => 9,
                'code' => 'FRF',
                'name' => 'French Franc'
            ],
            [
                'id' => 10,
                'code' => 'GBP',
                'name' => 'British Pound'
            ],
            [
                'id' => 11,
                'code' => 'GEL',
                'name' => 'Georgian Lari'
            ],
            [
                'id' => 12,
                'code' => 'GHC',
                'name' => 'Ghanian Cedi'
            ],
            [
                'id' => 13,
                'code' => 'GIP',
                'name' => 'Gibraltar Pound'
            ],
            [
                'id' => 14,
                'code' => 'GMD',
                'name' => 'Gambian Dalasi'
            ],
            [
                'id' => 15,
                'code' => 'GNF',
                'name' => 'Guinean Franc'
            ],
            [
                'id' => 16,
                'code' => 'GRD',
                'name' => 'Greek Drachma'
            ],
            [
                'id' => 17,
                'code' => 'GTQ',
                'name' => 'Guatemalan Quetzal'
            ],
            [
                'id' => 18,
                'code' => 'GWP',
                'name' => 'Guinea Peso'
            ],
            [
                'id' => 19,
                'code' => 'GYD',
                'name' => 'Guyana Dollar'
            ],
            [
                'id' => 20,
                'code' => 'HKD',
                'name' => 'Hong Kong Dollar'
            ],
            [
                'id' => 21,
                'code' => 'HNL',
                'name' => 'Honduran Lempira'
            ],
            [
                'id' => 22,
                'code' => 'HRK',
                'name' => 'Croatian Kuna'
            ],
            [
                'id' => 23,
                'code' => 'HTG',
                'name' => 'Haitian Gourde'
            ],
            [
                'id' => 24,
                'code' => 'HUF',
                'name' => 'Hungarian Forint'
            ],
            [
                'id' => 25,
                'code' => 'IDR',
                'name' => 'Indonesian Rupiah'
            ],
            [
                'id' => 26,
                'code' => 'IEP',
                'name' => 'Irish Punt'
            ],
            [
                'id' => 27,
                'code' => 'ILS',
                'name' => 'Israeli Scheckel'
            ],
            [
                'id' => 28,
                'code' => 'INR',
                'name' => 'Indian Rupee'
            ],
            [
                'id' => 29,
                'code' => 'IQD',
                'name' => 'Iraqui Dinar'
            ],
            [
                'id' => 30,
                'code' => 'IRR',
                'name' => 'Iranian Rial'
            ],
            [
                'id' => 31,
                'code' => 'ISK',
                'name' => 'Iceland Krona'
            ],
            [
                'id' => 32,
                'code' => 'ITL',
                'name' => 'Italian Lira'
            ],
            [
                'id' => 33,
                'code' => 'JMD',
                'name' => 'Jamaican Dollar'
            ],
            [
                'id' => 34,
                'code' => 'JOD',
                'name' => 'Jordanian Dinar'
            ],
            [
                'id' => 35,
                'code' => 'JPY',
                'name' => 'Japanese Yen'
            ],
            [
                'id' => 36,
                'code' => 'KES',
                'name' => 'Kenyan Shilling'
            ],
            [
                'id' => 37,
                'code' => 'KGS',
                'name' => 'Kyrgyzstan Som'
            ],
            [
                'id' => 38,
                'code' => 'KHR',
                'name' => 'Cambodian Riel'
            ],
            [
                'id' => 39,
                'code' => 'KMF',
                'name' => 'Comoros Franc'
            ],
            [
                'id' => 40,
                'code' => 'KPW',
                'name' => 'North Korean Won'
            ],
            [
                'id' => 41,
                'code' => 'KRW',
                'name' => 'South Korean Won'
            ],
            [
                'id' => 42,
                'code' => 'KWD',
                'name' => 'Kuwaiti Dinar'
            ],
            [
                'id' => 43,
                'code' => 'KYD',
                'name' => 'Cayman Dollar'
            ],
            [
                'id' => 44,
                'code' => 'KZT',
                'name' => 'Kazakstanian Tenge'
            ],
            [
                'id' => 45,
                'code' => 'LAK',
                'name' => 'Laotian Kip'
            ],
            [
                'id' => 46,
                'code' => 'LBP',
                'name' => 'Lebanese Pound'
            ],
            [
                'id' => 47,
                'code' => 'LKR',
                'name' => 'Sri Lankan Rupee'
            ],
            [
                'id' => 48,
                'code' => 'LRD',
                'name' => 'Liberian Dollar'
            ],
            [
                'id' => 49,
                'code' => 'LSL',
                'name' => 'Lesotho Loti'
            ],
            [
                'id' => 50,
                'code' => 'LTL',
                'name' => 'Lithuanian Lita'
            ],
            [
                'id' => 51,
                'code' => 'LUF',
                'name' => 'Luxembourg Franc'
            ],
            [
                'id' => 52,
                'code' => 'LVL',
                'name' => 'Latvian Lat'
            ],
            [
                'id' => 53,
                'code' => 'LYD',
                'name' => 'Libyan Dinar'
            ],
            [
                'id' => 54,
                'code' => 'MAD',
                'name' => 'Moroccan Dirham'
            ],
            [
                'id' => 55,
                'code' => 'MDL',
                'name' => 'Moldavian Leu'
            ],
            [
                'id' => 56,
                'code' => 'MGA',
                'name' => 'Madagascan Ariary (New)'
            ],
            [
                'id' => 57,
                'code' => 'MGF',
                'name' => 'Madagascan Franc (Old)'
            ],
            [
                'id' => 58,
                'code' => 'MKD',
                'name' => 'Macedonian Denar'
            ],
            [
                'id' => 59,
                'code' => 'MMK',
                'name' => 'Myanmar Kyat'
            ],
            [
                'id' => 60,
                'code' => 'MNT',
                'name' => 'Mongolian Tugrik'
            ],
            [
                'id' => 61,
                'code' => 'MOP',
                'name' => 'Macao Pataca'
            ],
            [
                'id' => 62,
                'code' => 'MRO',
                'name' => 'Mauritanian Ouguiya'
            ],
            [
                'id' => 63,
                'code' => 'MTL',
                'name' => 'Maltese Lira'
            ],
            [
                'id' => 64,
                'code' => 'MUR',
                'name' => 'Mauritian Rupee'
            ],
            [
                'id' => 65,
                'code' => 'MVR',
                'name' => 'Maldive Rufiyaa'
            ],
            [
                'id' => 66,
                'code' => 'MWK',
                'name' => 'Malawi Kwacha'
            ],
            [
                'id' => 67,
                'code' => 'MXN',
                'name' => 'Mexican Pesos'
            ],
            [
                'id' => 68,
                'code' => 'MYR',
                'name' => 'Malaysian Ringgit'
            ],
            [
                'id' => 69,
                'code' => 'MZM',
                'name' => 'Mozambique Metical'
            ],
            [
                'id' => 70,
                'code' => 'NAD',
                'name' => 'Namibian Dollar'
            ],
            [
                'id' => 71,
                'code' => 'NGN',
                'name' => 'Nigerian Naira'
            ],
            [
                'id' => 72,
                'code' => 'NIO',
                'name' => 'Nicaraguan Cordoba Oro'
            ],
            [
                'id' => 73,
                'code' => 'NLG',
                'name' => 'Dutch Guilder'
            ],
            [
                'id' => 74,
                'code' => 'NOK',
                'name' => 'Norwegian Krone'
            ],
            [
                'id' => 75,
                'code' => 'NPR',
                'name' => 'Nepalese Rupee'
            ],
            [
                'id' => 76,
                'code' => 'NZD',
                'name' => 'New Zealand Dollars'
            ],
            [
                'id' => 77,
                'code' => 'NZD5',
                'name' => 'New Zealand Dollars'
            ],
            [
                'id' => 78,
                'code' => 'OMR',
                'name' => 'Omani Rial'
            ],
            [
                'id' => 79,
                'code' => 'PAB',
                'name' => 'Panamanian Balboa'
            ],
            [
                'id' => 80,
                'code' => 'PEN',
                'name' => 'Peruvian New Sol'
            ],
            [
                'id' => 81,
                'code' => 'PGK',
                'name' => 'Papua New Guinea Kina'
            ],
            [
                'id' => 82,
                'code' => 'PHP',
                'name' => 'Philippine Peso'
            ],
            [
                'id' => 83,
                'code' => 'PKR',
                'name' => 'Pakistani Rupee'
            ],
            [
                'id' => 84,
                'code' => 'PLN',
                'name' => 'Polish Zloty (new)'
            ],
            [
                'id' => 85,
                'code' => 'PTE',
                'name' => 'Portuguese Escudo'
            ],
            [
                'id' => 86,
                'code' => 'PYG',
                'name' => 'Paraguayan Guarani'
            ],
            [
                'id' => 87,
                'code' => 'QAR',
                'name' => 'Qatar Rial'
            ],
            [
                'id' => 88,
                'code' => 'RMB',
                'name' => 'Chinese Yuan Renminbi'
            ],
            [
                'id' => 89,
                'code' => 'ROL',
                'name' => 'Romanian Leu'
            ],
            [
                'id' => 90,
                'code' => 'RUB',
                'name' => 'Russian Ruble'
            ],
            [
                'id' => 91,
                'code' => 'RWF',
                'name' => 'Rwandan Franc'
            ],
            [
                'id' => 92,
                'code' => 'SAR',
                'name' => 'Saudi Riyal'
            ],
            [
                'id' => 93,
                'code' => 'SBD',
                'name' => 'Solomon Islands Dollar'
            ],
            [
                'id' => 94,
                'code' => 'SCR',
                'name' => 'Seychelles Rupee'
            ],
            [
                'id' => 95,
                'code' => 'SDD',
                'name' => 'Sudanese Dinar'
            ],
            [
                'id' => 96,
                'code' => 'SDP',
                'name' => 'Sudanese Pound'
            ],
            [
                'id' => 97,
                'code' => 'SEK',
                'name' => 'Swedish Krona'
            ],
            [
                'id' => 98,
                'code' => 'SGD',
                'name' => 'Singapore Dollar'
            ],
            [
                'id' => 99,
                'code' => 'SHP',
                'name' => 'St.Helena Pound'
            ],
            [
                'id' => 100,
                'code' => 'SIT',
                'name' => 'Slovenian Tolar'
            ],
            [
                'id' => 101,
                'code' => 'SKK',
                'name' => 'Slovakian Krona'
            ],
            [
                'id' => 102,
                'code' => 'SLL',
                'name' => 'Sierra Leone Leone'
            ],
            [
                'id' => 103,
                'code' => 'SOS',
                'name' => 'Somalian Shilling'
            ],
            [
                'id' => 104,
                'code' => 'SRD',
                'name' => 'Surinam Dollar'
            ],
            [
                'id' => 105,
                'code' => 'SRG',
                'name' => 'Surinam Guilder (Old)'
            ],
            [
                'id' => 106,
                'code' => 'STD',
                'name' => 'Sao Tome / Principe Dobra'
            ],
            [
                'id' => 107,
                'code' => 'SVC',
                'name' => 'El Salvador Colon'
            ],
            [
                'id' => 108,
                'code' => 'SYP',
                'name' => 'Syrian Pound'
            ],
            [
                'id' => 109,
                'code' => 'SZL',
                'name' => 'Swaziland Lilangeni'
            ],
            [
                'id' => 110,
                'code' => 'THB',
                'name' => 'Thailand Baht'
            ],
            [
                'id' => 111,
                'code' => 'TJR',
                'name' => 'Tajikistani Ruble (Old)'
            ],
            [
                'id' => 112,
                'code' => 'TJS',
                'name' => 'Tajikistani Somoni'
            ],
            [
                'id' => 113,
                'code' => 'TMM',
                'name' => 'Turkmenistani Manat'
            ],
            [
                'id' => 114,
                'code' => 'TND',
                'name' => 'Tunisian Dinar'
            ],
            [
                'id' => 115,
                'code' => 'TOP',
                'name' => 'Tongan Pa\'anga'
            ],
            [
                'id' => 116,
                'code' => 'TPE',
                'name' => 'Timor Escudo'
            ],
            [
                'id' => 117,
                'code' => 'TRL',
                'name' => 'Turkish Lira (Old)'
            ],
            [
                'id' => 118,
                'code' => 'TRY',
                'name' => 'Turkish Lira'
            ],
            [
                'id' => 119,
                'code' => 'TTD',
                'name' => 'Trinidad and Tobago Dollar'
            ],
            [
                'id' => 120,
                'code' => 'TWD',
                'name' => 'New Taiwan Dollar'
            ],
            [
                'id' => 121,
                'code' => 'TZS',
                'name' => 'Tanzanian Shilling'
            ],
            [
                'id' => 122,
                'code' => 'UAH',
                'name' => 'Ukraine Hryvnia'
            ],
            [
                'id' => 123,
                'code' => 'UF',
                'name' => '' // Not provided in the original data
            ],
            [
                'id' => 124,
                'code' => 'UGX',
                'name' => 'Ugandan Shilling'
            ],
            [
                'id' => 125,
                'code' => 'USD',
                'name' => 'United States Dollar'
            ],
            [
                'id' => 126,
                'code' => 'USDN',
                'name' => '(Internal) United States Dollar (5 Dec.)'
            ],
            [
                'id' => 127,
                'code' => 'UTM',
                'name' => '' // Not provided in the original data
            ],
            [
                'id' => 128,
                'code' => 'UYU',
                'name' => 'Uruguayan Peso (new)'
            ],
            [
                'id' => 129,
                'code' => 'UZS',
                'name' => 'Uzbekistan Som'
            ],
            [
                'id' => 130,
                'code' => 'VEB',
                'name' => 'Venezuelan Bolivar'
            ],
            [
                'id' => 131,
                'code' => 'VEF',
                'name' => 'Venezuelan Bolivar Hard'
            ],
            [
                'id' => 132,
                'code' => 'VND',
                'name' => 'Vietnamese Dong'
            ],
            [
                'id' => 133,
                'code' => 'VUV',
                'name' => 'Vanuatu Vatu'
            ],
            [
                'id' => 134,
                'code' => 'WST',
                'name' => 'Samoan Tala'
            ],
            [
                'id' => 135,
                'code' => 'XAF',
                'name' => 'Gabon CFA Franc BEAC'
            ],
            [
                'id' => 136,
                'code' => 'XCD',
                'name' => 'East Carribean Dollar'
            ],
            [
                'id' => 137,
                'code' => 'XDS',
                'name' => 'St. Christopher Dollar'
            ],
            [
                'id' => 138,
                'code' => 'XEU',
                'name' => 'European Currency Unit (E.C.U.)'
            ],
            [
                'id' => 139,
                'code' => 'XOF',
                'name' => 'Benin CFA Franc BCEAO'
            ],
            [
                'id' => 140,
                'code' => 'XPF',
                'name' => 'CFP Franc'
            ],
            [
                'id' => 141,
                'code' => 'YER',
                'name' => 'Yemeni Ryal'
            ],
            [
                'id' => 142,
                'code' => 'YUM',
                'name' => 'New Yugoslavian Dinar (Old)'
            ],
            [
                'id' => 143,
                'code' => 'ZAR',
                'name' => 'South African Rand'
            ],
            [
                'id' => 144,
                'code' => 'ZMK',
                'name' => 'Zambian Kwacha'
            ],
            [
                'id' => 145,
                'code' => 'ZRN',
                'name' => 'Zaire (Old)'
            ],
            [
                'id' => 146,
                'code' => 'ZWD',
                'name' => 'Zimbabwean Dollar'
            ]
        ];
        
        collect($currencies)->each(function ($currency) {
            $checkCurrency = Currency::where('id', $currency['id'])->first();
            if ($checkCurrency) {
                Currency::where('id', $currency['id'])->update($currency);
            }else{
                Currency::create($currency);
            }
        });      
    }
}
