<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserDummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'no' => '1',
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'level' => 1,
                'company_id' => null
            ],
            [
                'id' => 2,
                'no' => '2',
                'name' => 'Purchasing',
                'email' => 'purchasing@mail.com',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'level' => 2,
                'company_id' => 1
            ],
            [
                'id' => 3,
                'no' => '3',
                'name' => 'Master data',
                'email' => 'masterdata@mail.com',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'level' => 3,
                'company_id' => null
            ],
            [
                'id' => 4,
                'no' => '4',
                'name' => 'Approval1',
                'email' => 'approval1@mail.com',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'level' => 4,
                'company_id' => 1
            ],
            [
                'id' => 5,
                'no' => '5',
                'name' => 'Approval2',
                'email' => 'approval2@mail.com',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'level' => 4,
                'company_id' => 1
            ]
        ];
        
        collect($users)->each(function ($user) {
            $checkUser = User::where('id', $user['id'])->first();
            if ($checkUser) {
                User::where('id', $user['id'])->update($user);
            } else {
                User::create($user);
            }
        });
    }
}
