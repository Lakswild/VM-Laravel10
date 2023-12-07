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
        Schema::table('form_detail', function (Blueprint $table) {
            $table->foreign(['form_id'], 'form_detail_ibfk_1')->references(['id'])->on('form');
            $table->foreign(['status_id'], 'form_detail_ibfk_3')->references(['id'])->on('status');
            $table->foreign(['tipe_input_id'], 'form_detail_ibfk_2')->references(['id'])->on('tipe_input');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_detail', function (Blueprint $table) {
            $table->dropForeign('form_detail_ibfk_1');
            $table->dropForeign('form_detail_ibfk_3');
            $table->dropForeign('form_detail_ibfk_2');
        });
    }
};
