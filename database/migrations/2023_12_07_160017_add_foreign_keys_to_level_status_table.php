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
        Schema::table('level_status', function (Blueprint $table) {
            $table->foreign(['level_id'], 'level_status_ibfk_1')->references(['id'])->on('level');
            $table->foreign(['status_id'], 'level_status_ibfk_2')->references(['id'])->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('level_status', function (Blueprint $table) {
            $table->dropForeign('level_status_ibfk_1');
            $table->dropForeign('level_status_ibfk_2');
        });
    }
};
