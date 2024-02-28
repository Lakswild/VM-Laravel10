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
        Schema::table('finance', function (Blueprint $table) {
            $table->foreign(['company_id'], 'finance_ibfk_1')->references(['id'])->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('finance', function (Blueprint $table) {
            $table->dropForeign('finance_ibfk_1');
        });
    }
};
