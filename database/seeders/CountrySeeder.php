<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $countries = [
            [
                'id' => 1,
                'code' => 'AD',
                'name' => 'Andorran',
                'company_id' => 1
            ],
            [
                'id' => 2,
                'code' => 'AE',
                'name' => 'Utd.Arab Emir.',
                'company_id' => 1
            ],
            [
                'id' => 3,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'company_id' => 1
            ],
            [
                'id' => 4,
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'company_id' => 1
            ],
            [
                'id' => 5,
                'code' => 'AI',
                'name' => 'Anguilla',
                'company_id' => 1
            ],
            [
                'id' => 6,
                'code' => 'AL',
                'name' => 'Albania',
                'company_id' => 1
            ],
            [
                'id' => 7,
                'code' => 'AM',
                'name' => 'Armenia',
                'company_id' => 1
            ],
            [
                'id' => 8,
                'code' => 'AN',
                'name' => 'Dutch Antilles',
                'company_id' => 1
            ],
            [
                'id' => 9,
                'code' => 'AO',
                'name' => 'Angola',
                'company_id' => 1
            ],
            [
                'id' => 10,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'company_id' => 1
            ],
            [
                'id' => 11,
                'code' => 'AR',
                'name' => 'Argentina',
                'company_id' => 1
            ],
            [
                'id' => 12,
                'code' => 'AS',
                'name' => 'Samoa, America',
                'company_id' => 1
            ],
            [
                'id' => 13,
                'code' => 'AT',
                'name' => 'Austria',
                'company_id' => 1
            ],
            [
                'id' => 14,
                'code' => 'AU',
                'name' => 'Australia',
                'company_id' => 1
            ],
            [
                'id' => 15,
                'code' => 'AW',
                'name' => 'Aruba',
                'company_id' => 1
            ],
            [
                'id' => 16,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'company_id' => 1
            ],
            [
                'id' => 17,
                'code' => 'BA',
                'name' => 'Bosnia-Herz.',
                'company_id' => 1
            ],
            [
                'id' => 18,
                'code' => 'BB',
                'name' => 'Barbados',
                'company_id' => 1
            ],
            [
                'id' => 19,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'company_id' => 1
            ],
            [
                'id' => 20,
                'code' => 'BE',
                'name' => 'Belgium',
                'company_id' => 1
            ],
            [
                'id' => 21,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'company_id' => 1
            ],
            [
                'id' => 22,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'company_id' => 1
            ],
            [
                'id' => 23,
                'code' => 'BH',
                'name' => 'Bahrain',
                'company_id' => 1
            ],
            [
                'id' => 24,
                'code' => 'BI',
                'name' => 'Burundi',
                'company_id' => 1
            ],
            [
                'id' => 25,
                'code' => 'BJ',
                'name' => 'Benin',
                'company_id' => 1
            ],
            [
                'id' => 26,
                'code' => 'BL',
                'name' => 'Blue',
                'company_id' => 1
            ],
            [
                'id' => 27,
                'code' => 'BM',
                'name' => 'Bermuda',
                'company_id' => 1
            ],
            [
                'id' => 28,
                'code' => 'BN',
                'name' => 'Brunei Daruss.',
                'company_id' => 1
            ],
            [
                'id' => 29,
                'code' => 'BO',
                'name' => 'Bolivia',
                'company_id' => 1
            ],
            [
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'company_id' => 1
            ],
            [
                'id' => 31,
                'code' => 'BS',
                'name' => 'Bahamas',
                'company_id' => 1
            ],
            [
                'id' => 32,
                'code' => 'BT',
                'name' => 'Bhutan',
                'company_id' => 1
            ],
            [
                'id' => 33,
                'code' => 'BV',
                'name' => 'Bouvet Islands',
                'company_id' => 1
            ],
            [
                'id' => 34,
                'code' => 'BW',
                'name' => 'Botswana',
                'company_id' => 1
            ],
            [
                'id' => 35,
                'code' => 'BY',
                'name' => 'Belarus',
                'company_id' => 1
            ],
            [
                'id' => 36,
                'code' => 'BZ',
                'name' => 'Belize',
                'company_id' => 1
            ],
            [
                'id' => 37,
                'code' => 'CA',
                'name' => 'Canada',
                'company_id' => 1
            ],
            [
                'id' => 38,
                'code' => 'CC',
                'name' => 'Coconut Islands',
                'company_id' => 1
            ],
            [
                'id' => 39,
                'code' => 'CD',
                'name' => 'Dem. Rep. Congo',
                'company_id' => 1
            ],
            [
                'id' => 40,
                'code' => 'CF',
                'name' => 'CAR',
                'company_id' => 1
            ],
            [
                'id' => 41,
                'code' => 'CG',
                'name' => 'Rep.of Congo',
                'company_id' => 1
            ],
            [
                'id' => 42,
                'code' => 'CH',
                'name' => 'Switzerland',
                'company_id' => 1
            ],
            [
                'id' => 43,
                'code' => 'CI',
                'name' => 'Cote d\'Ivoire',
                'company_id' => 1
            ],
            [
                'id' => 44,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'company_id' => 1
            ],
            [
                'id' => 45,
                'code' => 'CL',
                'name' => 'Chile',
                'company_id' => 1
            ],
            [
                'id' => 46,
                'code' => 'CM',
                'name' => 'Cameroon',
                'company_id' => 1
            ],
            [
                'id' => 47,
                'code' => 'CN',
                'name' => 'China',
                'company_id' => 1
            ],
            [
                'id' => 48,
                'code' => 'CO',
                'name' => 'Colombia',
                'company_id' => 1
            ],
            [
                'id' => 49,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'company_id' => 1
            ],
            [
                'id' => 50,
                'code' => 'CS',
                'name' => 'Serbia/Monten.',
                'company_id' => 1
            ],
            [
                'id' => 51,
                'code' => 'CU',
                'name' => 'Cuba',
                'company_id' => 1
            ],
            [
                'id' => 52,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'company_id' => 1
            ],
            [
                'id' => 53,
                'code' => 'CW',
                'name' => 'Curaçao',
                'company_id' => 1
            ],
            [
                'id' => 54,
                'code' => 'CX',
                'name' => 'Christmas Islnd',
                'company_id' => 1
            ],
            [
                'id' => 55,
                'code' => 'CY',
                'name' => 'Cyprus',
                'company_id' => 1
            ],
            [
                'id' => 56,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'company_id' => 1
            ],
            [
                'id' => 57,
                'code' => 'DE',
                'name' => 'Germany',
                'company_id' => 1
            ],
            [
                'id' => 58,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'company_id' => 1
            ],
            [
                'id' => 59,
                'code' => 'DK',
                'name' => 'Denmark',
                'company_id' => 1
            ],
            [
                'id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'company_id' => 1
            ],
            [
                'id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Rep.',
                'company_id' => 1
            ],
            [
                'id' => 62,
                'code' => 'DZ',
                'name' => 'Algeria',
                'company_id' => 1
            ],
            [
                'id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'company_id' => 1
            ],
            [
                'id' => 64,
                'code' => 'EE',
                'name' => 'Estonia',
                'company_id' => 1
            ],
            [
                'id' => 65,
                'code' => 'EG',
                'name' => 'Egypt',
                'company_id' => 1
            ],
            [
                'id' => 66,
                'code' => 'EH',
                'name' => 'West Sahara',
                'company_id' => 1
            ],
            [
                'id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'company_id' => 1
            ],
            [
                'id' => 68,
                'code' => 'ES',
                'name' => 'Spain',
                'company_id' => 1
            ],
            [
                'id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'company_id' => 1
            ],
            [
                'id' => 70,
                'code' => 'EU',
                'name' => 'European Union',
                'company_id' => 1
            ],
            [
                'id' => 71,
                'code' => 'FI',
                'name' => 'Finland',
                'company_id' => 1
            ],
            [
                'id' => 72,
                'code' => 'FJ',
                'name' => 'Fiji',
                'company_id' => 1
            ],
            [
                'id' => 73,
                'code' => 'FK',
                'name' => 'Falkland Islnds',
                'company_id' => 1
            ],
            [
                'id' => 74,
                'code' => 'FM',
                'name' => 'Micronesia',
                'company_id' => 1
            ],
            [
                'id' => 75,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'company_id' => 1
            ],
            [
                'id' => 76,
                'code' => 'FR',
                'name' => 'France',
                'company_id' => 1
            ],
            [
                'id' => 77,
                'code' => 'GA',
                'name' => 'Gabon',
                'company_id' => 1
            ],
            [
                'id' => 78,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'company_id' => 1
            ],
            [
                'id' => 79,
                'code' => 'GD',
                'name' => 'Grenada',
                'company_id' => 1
            ],
            [
                'id' => 80,
                'code' => 'GE',
                'name' => 'Georgia',
                'company_id' => 1
            ],
            [
                'id' => 81,
                'code' => 'GF',
                'name' => 'French Guayana',
                'company_id' => 1
            ],
            [
                'id' => 82,
                'code' => 'GH',
                'name' => 'Ghana',
                'company_id' => 1
            ],
            [
                'id' => 83,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'company_id' => 1
            ],
            [
                'id' => 84,
                'code' => 'GL',
                'name' => 'Greenland',
                'company_id' => 1
            ],
            [
                'id' => 85,
                'code' => 'GM',
                'name' => 'Gambia',
                'company_id' => 1
            ],
            [
                'id' => 86,
                'code' => 'GN',
                'name' => 'Guinea',
                'company_id' => 1
            ],
            [
                'id' => 87,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'company_id' => 1
            ],
            [
                'id' => 88,
                'code' => 'GQ',
                'name' => 'Equatorial Guin',
                'company_id' => 1
            ],
            [
                'id' => 89,
                'code' => 'GR',
                'name' => 'Greece',
                'company_id' => 1
            ],
            [
                'id' => 90,
                'code' => 'GS',
                'name' => 'S. Sandwich Ins',
                'company_id' => 1
            ],
            [
                'id' => 91,
                'code' => 'GT',
                'name' => 'Guatemala',
                'company_id' => 1
            ],
            [
                'id' => 92,
                'code' => 'GU',
                'name' => 'Guam',
                'company_id' => 1
            ],
            [
                'id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'company_id' => 1
            ],
            [
                'id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'company_id' => 1
            ],
            [
                'id' => 95,
                'code' => 'HK',
                'name' => 'Hong Kong',
                'company_id' => 1
            ],
            [
                'id' => 96,
                'code' => 'HM',
                'name' => 'Heard/McDon.Isl',
                'company_id' => 1
            ],
            [
                'id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'company_id' => 1
            ],
            [
                'id' => 98,
                'code' => 'HR',
                'name' => 'Croatia',
                'company_id' => 1
            ],
            [
                'id' => 99,
                'code' => 'HT',
                'name' => 'Haiti',
                'company_id' => 1
            ],
            [
                'id' => 100,
                'code' => 'HU',
                'name' => 'Hungary',
                'company_id' => 1
            ],
            [
                'id' => 101,
                'code' => 'ID',
                'name' => 'Indonesia',
                'company_id' => 1
            ],
            [
                'id' => 102,
                'code' => 'IE',
                'name' => 'Ireland',
                'company_id' => 1
            ],
            [
                'id' => 103,
                'code' => 'IL',
                'name' => 'Israel',
                'company_id' => 1
            ],
            [
                'id' => 104,
                'code' => 'IN',
                'name' => 'India',
                'company_id' => 1
            ],
            [
                'id' => 105,
                'code' => 'IO',
                'name' => 'Brit.Ind.Oc.Ter',
                'company_id' => 1
            ],
            [
                'id' => 106,
                'code' => 'IQ',
                'name' => 'Iraq',
                'company_id' => 1
            ],
            [
                'id' => 107,
                'code' => 'IR',
                'name' => 'Iran',
                'company_id' => 1
            ],
            [
                'id' => 108,
                'code' => 'IS',
                'name' => 'Iceland',
                'company_id' => 1
            ],
            [
                'id' => 109,
                'code' => 'IT',
                'name' => 'Italy',
                'company_id' => 1
            ],
            [
                'id' => 110,
                'code' => 'JM',
                'name' => 'Jamaica',
                'company_id' => 1
            ],
            [
                'id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'company_id' => 1
            ],
            [
                'id' => 112,
                'code' => 'JP',
                'name' => 'Japan',
                'company_id' => 1
            ],
            [
                'id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'company_id' => 1
            ],
            [
                'id' => 114,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'company_id' => 1
            ],
            [
                'id' => 115,
                'code' => 'KH',
                'name' => 'Cambodia',
                'company_id' => 1
            ],
            [
                'id' => 116,
                'code' => 'KI',
                'name' => 'Kiribati',
                'company_id' => 1
            ],
            [
                'id' => 117,
                'code' => 'KM',
                'name' => 'Comoros',
                'company_id' => 1
            ],
            [
                'id' => 118,
                'code' => 'KN',
                'name' => 'St Kitts&Nevis',
                'company_id' => 1
            ],
            [
                'id' => 119,
                'code' => 'KP',
                'name' => 'North Korea',
                'company_id' => 1
            ],
            [
                'id' => 120,
                'code' => 'KR',
                'name' => 'South Korea',
                'company_id' => 1
            ],
            [
                'id' => 121,
                'code' => 'KW',
                'name' => 'Kuwait',
                'company_id' => 1
            ],
            [
                'id' => 122,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'company_id' => 1
            ],
            [
                'id' => 123,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'company_id' => 1
            ],
            [
                'id' => 124,
                'code' => 'LA',
                'name' => 'Laos',
                'company_id' => 1
            ],
            [
                'id' => 125,
                'code' => 'LB',
                'name' => 'Lebanon',
                'company_id' => 1
            ],
            [
                'id' => 126,
                'code' => 'LC',
                'name' => 'St. Lucia',
                'company_id' => 1
            ],
            [
                'id' => 127,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'company_id' => 1
            ],
            [
                'id' => 128,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'company_id' => 1
            ],
            [
                'id' => 129,
                'code' => 'LR',
                'name' => 'Liberia',
                'company_id' => 1
            ],
            [
                'id' => 130,
                'code' => 'LS',
                'name' => 'Lesotho',
                'company_id' => 1
            ],
            [
                'id' => 131,
                'code' => 'LT',
                'name' => 'Lithuania',
                'company_id' => 1
            ],
            [
                'id' => 132,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'company_id' => 1
            ],
            [
                'id' => 133,
                'code' => 'LV',
                'name' => 'Latvia',
                'company_id' => 1
            ],
            [
                'id' => 134,
                'code' => 'LY',
                'name' => 'Libya',
                'company_id' => 1
            ],
            [
                'id' => 135,
                'code' => 'MA',
                'name' => 'Morocco',
                'company_id' => 1
            ],
            [
                'id' => 136,
                'code' => 'MC',
                'name' => 'Monaco',
                'company_id' => 1
            ],
            [
                'id' => 137,
                'code' => 'MD',
                'name' => 'Moldova',
                'company_id' => 1
            ],
            [
                'id' => 138,
                'code' => 'MG',
                'name' => 'Madagascar',
                'company_id' => 1
            ],
            [
                'id' => 139,
                'code' => 'MH',
                'name' => 'Marshall Islnds',
                'company_id' => 1
            ],
            [
                'id' => 140,
                'code' => 'MK',
                'name' => 'Macedonia',
                'company_id' => 1
            ],
            [
                'id' => 141,
                'code' => 'ML',
                'name' => 'Mali',
                'company_id' => 1
            ],
            [
                'id' => 142,
                'code' => 'MM',
                'name' => 'Burma',
                'company_id' => 1
            ],
            [
                'id' => 143,
                'code' => 'MN',
                'name' => 'Mongolia',
                'company_id' => 1
            ],
            [
                'id' => 144,
                'code' => 'MO',
                'name' => 'Macau',
                'company_id' => 1
            ],
            [
                'id' => 145,
                'code' => 'MP',
                'name' => 'Mariana Islnds',
                'company_id' => 1
            ],
            [
                'id' => 146,
                'code' => 'MQ',
                'name' => 'Martinique',
                'company_id' => 1
            ],
            [
                'id' => 147,
                'code' => 'MR',
                'name' => 'Mauritania',
                'company_id' => 1
            ],
            [
                'id' => 148,
                'code' => 'MS',
                'name' => 'Montserrat',
                'company_id' => 1
            ],
            [
                'id' => 149,
                'code' => 'MT',
                'name' => 'Malta',
                'company_id' => 1
            ],
            [
                'id' => 150,
                'code' => 'MU',
                'name' => 'Mauritius',
                'company_id' => 1
            ],
            [
                'id' => 151,
                'code' => 'MV',
                'name' => 'Maldives',
                'company_id' => 1
            ],
            [
                'id' => 152,
                'code' => 'MW',
                'name' => 'Malawi',
                'company_id' => 1
            ],
            [
                'id' => 153,
                'code' => 'MX',
                'name' => 'Mexico',
                'company_id' => 1
            ],
            [
                'id' => 154,
                'code' => 'MY',
                'name' => 'Malaysia',
                'company_id' => 1
            ],
            [
                'id' => 155,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'company_id' => 1
            ],
            [
                'id' => 156,
                'code' => 'NA',
                'name' => 'Namibia',
                'company_id' => 1
            ],
            [
                'id' => 157,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'company_id' => 1
            ],
            [
                'id' => 158,
                'code' => 'NE',
                'name' => 'Niger',
                'company_id' => 1
            ],
            [
                'id' => 159,
                'code' => 'NF',
                'name' => 'Norfolk Islands',
                'company_id' => 1
            ],
            [
                'id' => 160,
                'code' => 'NG',
                'name' => 'Nigeria',
                'company_id' => 1
            ],
            [
                'id' => 161,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'company_id' => 1
            ],
            [
                'id' => 162,
                'code' => 'NL',
                'name' => 'Netherlands',
                'company_id' => 1
            ],
            [
                'id' => 163,
                'code' => 'NO',
                'name' => 'Norway',
                'company_id' => 1
            ],
            [
                'id' => 164,
                'code' => 'NP',
                'name' => 'Nepal',
                'company_id' => 1
            ],
            [
                'id' => 165,
                'code' => 'NR',
                'name' => 'Nauru',
                'company_id' => 1
            ],
            [
                'id' => 166,
                'code' => 'NT',
                'name' => 'Neutral Zone',
                'company_id' => 1
            ],
            [
                'id' => 167,
                'code' => 'NU',
                'name' => 'Niue',
                'company_id' => 1
            ],
            [
                'id' => 168,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'company_id' => 1
            ],
            [
                'id' => 169,
                'code' => 'OM',
                'name' => 'Oman',
                'company_id' => 1
            ],
            [
                'id' => 170,
                'code' => 'PA',
                'name' => 'Panama',
                'company_id' => 1
            ],
            [
                'id' => 171,
                'code' => 'PE',
                'name' => 'Peru',
                'company_id' => 1
            ],
            [
                'id' => 172,
                'code' => 'PF',
                'name' => 'Frenc.Polynesia',
                'company_id' => 1
            ],
            [
                'id' => 173,
                'code' => 'PG',
                'name' => 'Papua Nw Guinea',
                'company_id' => 1
            ],
            [
                'id' => 174,
                'code' => 'PH',
                'name' => 'Philippines',
                'company_id' => 1
            ],
            [
                'id' => 175,
                'code' => 'PK',
                'name' => 'Pakistan',
                'company_id' => 1
            ],
            [
                'id' => 176,
                'code' => 'PL',
                'name' => 'Poland',
                'company_id' => 1
            ],
            [
                'id' => 177,
                'code' => 'PM',
                'name' => 'St Pierre/Miquel',
                'company_id' => 1
            ],
            [
                'id' => 178,
                'code' => 'PN',
                'name' => 'Pitcairn Islands',
                'company_id' => 1
            ],
            [
                'id' => 179,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'company_id' => 1
            ],
            [
                'id' => 180,
                'code' => 'PS',
                'name' => 'Palestine',
                'company_id' => 1
            ],
            [
                'id' => 181,
                'code' => 'PT',
                'name' => 'Portugal',
                'company_id' => 1
            ],
            [
                'id' => 182,
                'code' => 'PW',
                'name' => 'Palau',
                'company_id' => 1
            ],
            [
                'id' => 183,
                'code' => 'PY',
                'name' => 'Paraguay',
                'company_id' => 1
            ],
            [
                'id' => 184,
                'code' => 'QA',
                'name' => 'Qatar',
                'company_id' => 1
            ],
            [
                'id' => 185,
                'code' => 'RE',
                'name' => 'Reunion',
                'company_id' => 1
            ],
            [
                'id' => 186,
                'code' => 'RO',
                'name' => 'Romania',
                'company_id' => 1
            ],
            [
                'id' => 187,
                'code' => 'RS',
                'name' => 'Serbia',
                'company_id' => 1
            ],
            [
                'id' => 188,
                'code' => 'RU',
                'name' => 'Russia',
                'company_id' => 1
            ],
            [
                'id' => 189,
                'code' => 'RW',
                'name' => 'Rwanda',
                'company_id' => 1
            ],
            [
                'id' => 190,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'company_id' => 1
            ],
            [
                'id' => 191,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'company_id' => 1
            ],
            [
                'id' => 192,
                'code' => 'SC',
                'name' => 'Seychelles',
                'company_id' => 1
            ],
            [
                'id' => 193,
                'code' => 'SD',
                'name' => 'Sudan',
                'company_id' => 1
            ],
            [
                'id' => 194,
                'code' => 'SE',
                'name' => 'Sweden',
                'company_id' => 1
            ],
            [
                'id' => 195,
                'code' => 'SG',
                'name' => 'Singapore',
                'company_id' => 1
            ],
            [
                'id' => 196,
                'code' => 'SH',
                'name' => 'St Helena',
                'company_id' => 1
            ],
            [
                'id' => 197,
                'code' => 'SI',
                'name' => 'Slovenia',
                'company_id' => 1
            ],
            [
                'id' => 198,
                'code' => 'SJ',
                'name' => 'Svalbard',
                'company_id' => 1
            ],
            [
                'id' => 199,
                'code' => 'SK',
                'name' => 'Slovakia',
                'company_id' => 1
            ],
            [
                'id' => 200,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'company_id' => 1
            ],
            [
                'id' => 201,
                'code' => 'SM',
                'name' => 'San Marino',
                'company_id' => 1
            ],
            [
                'id' => 202,
                'code' => 'SN',
                'name' => 'Senegal',
                'company_id' => 1
            ],
            [
                'id' => 203,
                'code' => 'SO',
                'name' => 'Somalia',
                'company_id' => 1
            ],
            [
                'id' => 204,
                'code' => 'SR',
                'name' => 'Suriname',
                'company_id' => 1
            ],
            [
                'id' => 205,
                'code' => 'SS',
                'name' => 'S. Sudan',
                'company_id' => 1
            ],
            [
                'id' => 206,
                'code' => 'ST',
                'name' => 'São Tomé/Principe',
                'company_id' => 1
            ],
            [
                'id' => 207,
                'code' => 'SU',
                'name' => 'USSR',
                'company_id' => 1
            ],
            [
                'id' => 208,
                'code' => 'SV',
                'name' => 'El Salvador',
                'company_id' => 1
            ],
            [
                'id' => 209,
                'code' => 'SX',
                'name' => 'Sint Maarten',
                'company_id' => 1
            ],
            [
                'id' => 210,
                'code' => 'SY',
                'name' => 'Syria',
                'company_id' => 1
            ],
            [
                'id' => 211,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'company_id' => 1
            ],
            [
                'id' => 212,
                'code' => 'TC',
                'name' => 'Turks/Caicos Isl',
                'company_id' => 1
            ],
            [
                'id' => 213,
                'code' => 'TD',
                'name' => 'Chad',
                'company_id' => 1
            ],
            [
                'id' => 214,
                'code' => 'TF',
                'name' => 'French S.Territ',
                'company_id' => 1
            ],
            [
                'id' => 215,
                'code' => 'TG',
                'name' => 'Togo',
                'company_id' => 1
            ],
            [
                'id' => 216,
                'code' => 'TH',
                'name' => 'Thailand',
                'company_id' => 1
            ],
            [
                'id' => 217,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'company_id' => 1
            ],
            [
                'id' => 218,
                'code' => 'TK',
                'name' => 'Tokelau',
                'company_id' => 1
            ],
            [
                'id' => 219,
                'code' => 'TL',
                'name' => 'Timor-Leste',
                'company_id' => 1
            ],
            [
                'id' => 220,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'company_id' => 1
            ],
            [
                'id' => 221,
                'code' => 'TN',
                'name' => 'Tunisia',
                'company_id' => 1
            ],
            [
                'id' => 222,
                'code' => 'TO',
                'name' => 'Tonga',
                'company_id' => 1
            ],
            [
                'id' => 223,
                'code' => 'TR',
                'name' => 'Turkey',
                'company_id' => 1
            ],
            [
                'id' => 224,
                'code' => 'TT',
                'name' => 'Trinidad/Tobago',
                'company_id' => 1
            ],
            [
                'id' => 225,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'company_id' => 1
            ],
            [
                'id' => 226,
                'code' => 'TW',
                'name' => 'Taiwan',
                'company_id' => 1
            ],
            [
                'id' => 227,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'company_id' => 1
            ],
            [
                'id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'company_id' => 1
            ],
            [
                'id' => 229,
                'code' => 'UG',
                'name' => 'Uganda',
                'company_id' => 1
            ],
            [
                'id' => 230,
                'code' => 'UM',
                'name' => 'US Minor Outlyg',
                'company_id' => 1
            ],
            [
                'id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'company_id' => 1
            ],
            [
                'id' => 232,
                'code' => 'UY',
                'name' => 'Uruguay',
                'company_id' => 1
            ],
            [
                'id' => 233,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'company_id' => 1
            ],
            [
                'id' => 234,
                'code' => 'VA',
                'name' => 'Vatican City',
                'company_id' => 1
            ],
            [
                'id' => 235,
                'code' => 'VC',
                'name' => 'St Vincent',
                'company_id' => 1
            ],
            [
                'id' => 236,
                'code' => 'VE',
                'name' => 'Venezuela',
                'company_id' => 1
            ],
            [
                'id' => 237,
                'code' => 'VG',
                'name' => 'Virgin Islands',
                'company_id' => 1
            ],
            [
                'id' => 238,
                'code' => 'VI',
                'name' => 'U.S.A. Vir.Is.',
                'company_id' => 1
            ],
            [
                'id' => 239,
                'code' => 'VN',
                'name' => 'Vietnam',
                'company_id' => 1
            ],
            [
                'id' => 240,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'company_id' => 1
            ],
            [
                'id' => 241,
                'code' => 'WF',
                'name' => 'Wallis/Futuna',
                'company_id' => 1
            ],
            [
                'id' => 242,
                'code' => 'WS',
                'name' => 'Samoa',
                'company_id' => 1
            ],
            [
                'id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'company_id' => 1
            ],
            [
                'id' => 244,
                'code' => 'YT',
                'name' => 'Mayotte',
                'company_id' => 1
            ],
            [
                'id' => 245,
                'code' => 'YU',
                'name' => 'Yugoslavia',
                'company_id' => 1
            ],
            [
                'id' => 246,
                'code' => 'ZA',
                'name' => 'South Africa',
                'company_id' => 1
            ],
            [
                'id' => 247,
                'code' => 'ZM',
                'name' => 'Zambia',
                'company_id' => 1
            ],
            [
                'id' => 248,
                'code' => 'ZR',
                'name' => 'Zaire',
                'company_id' => 1
            ],
            [
                'id' => 249,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'company_id' => 1
            ],
        ];
        
        collect($countries)->each(function ($country) {
            $checkCountry = Country::where('id', $country['id'])->first();
            if ($checkCountry) {
                Country::where('id', $country['id'])->update($country);
            } else {
                Country::create($country);
            }
        });
 	 
    }
}
