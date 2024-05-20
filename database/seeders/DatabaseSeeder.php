<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(FinanceSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(SchemaGroupSeeder::class);
        $this->call(TermOfPaymentSeeder::class);
        $this->call(PaymentMethodSeeder::class);

        $this->call(CountrySeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(AccountGroupSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(UserDummySeeder::class);
    }
}
