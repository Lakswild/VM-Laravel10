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
        Schema::table('skema_vendor', function (Blueprint $table) {
            $table->foreign(['akun_id'], 'skema_vendor_ibfk_1')->references(['id'])->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skema_vendor', function (Blueprint $table) {
            $table->dropForeign('skema_vendor_ibfk_1');
        });
    }
};
