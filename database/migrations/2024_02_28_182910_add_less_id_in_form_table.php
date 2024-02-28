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
            $table->bigInteger('term_of_payment_id')->index('term_of_payment_id');
            $table->bigInteger('payment_method_id')->index('payment_method_id');
            $table->bigInteger('finance_id')->index('finance_id');
            $table->bigInteger('currency_id')->index('currency_id');
            $table->bigInteger('schema_group_id')->index('schema_group_id');
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
