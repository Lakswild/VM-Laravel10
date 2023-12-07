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
        Schema::table('on_form_status', function (Blueprint $table) {
            $table->foreign(['form_id'], 'on_form_status_ibfk_1')->references(['id'])->on('on_form');
            $table->foreign(['status_id'], 'on_form_status_ibfk_2')->references(['id'])->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('on_form_status', function (Blueprint $table) {
            $table->dropForeign('on_form_status_ibfk_1');
            $table->dropForeign('on_form_status_ibfk_2');
        });
    }
};
