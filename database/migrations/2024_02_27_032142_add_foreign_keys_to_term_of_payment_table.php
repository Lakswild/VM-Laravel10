<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('term_of_payment', function (Blueprint $table) {
            $table->foreign(['company_id'], 'term_of_payment_ibfk_1')->references(['id'])->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('term_of_payment', function (Blueprint $table) {
            $table->dropForeign('term_of_payment_ibfk_1');
        });
    }
};
