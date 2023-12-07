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
        Schema::table('form', function (Blueprint $table) {
            $table->foreign(['user_id'], 'form_ibfk_1')->references(['id'])->on('user');
            $table->foreign(['akun_id'], 'form_ibfk_3')->references(['id'])->on('akun');
            $table->foreign(['jenis_id'], 'form_ibfk_2')->references(['id'])->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->dropForeign('form_ibfk_1');
            $table->dropForeign('form_ibfk_3');
            $table->dropForeign('form_ibfk_2');
        });
    }
};
