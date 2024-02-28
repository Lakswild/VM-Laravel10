<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('form', function (Blueprint $table) {
            $table->foreign(['term_of_payment_id'])->references(['id'])->on('term_of_payment');
            $table->foreign(['payment_method_id'])->references(['id'])->on('payment_method');
            $table->foreign(['finance_id'])->references(['id'])->on('finance');
            $table->foreign(['currency_id'])->references(['id'])->on('currency');
            $table->foreign(['schema_group_id'])->references(['id'])->on('schema_group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('form', function (Blueprint $table) {
            //
        });
    }
};
