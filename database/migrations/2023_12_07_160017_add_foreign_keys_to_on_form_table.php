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
        Schema::table('on_form', function (Blueprint $table) {
            $table->foreign(['user_id'], 'on_form_ibfk_3')->references(['id'])->on('user');
            $table->foreign(['ketentuan_id'], 'on_form_ibfk_5')->references(['id'])->on('ketentuan');
            $table->foreign(['ketentuan_pembayaran_id'], 'on_form_ibfk_7')->references(['id'])->on('ketentuan_pembayaran');
            $table->foreign(['jenis_id'], 'on_form_ibfk_1')->references(['id'])->on('jenis');
            $table->foreign(['mata_uang_id'], 'on_form_ibfk_9')->references(['id'])->on('mata_uang');
            $table->foreign(['akun_id'], 'on_form_ibfk_2')->references(['id'])->on('akun');
            $table->foreign(['pembelian_id'], 'on_form_ibfk_4')->references(['id'])->on('pembelian');
            $table->foreign(['provinsi_id'], 'on_form_ibfk_6')->references(['id'])->on('provinsi');
            $table->foreign(['metode_pembayaran_id'], 'on_form_ibfk_8')->references(['id'])->on('metode_pembayaran');
            $table->foreign(['skema_vendor_id'], 'on_form_ibfk_10')->references(['id'])->on('skema_vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('on_form', function (Blueprint $table) {
            $table->dropForeign('on_form_ibfk_3');
            $table->dropForeign('on_form_ibfk_5');
            $table->dropForeign('on_form_ibfk_7');
            $table->dropForeign('on_form_ibfk_1');
            $table->dropForeign('on_form_ibfk_9');
            $table->dropForeign('on_form_ibfk_2');
            $table->dropForeign('on_form_ibfk_4');
            $table->dropForeign('on_form_ibfk_6');
            $table->dropForeign('on_form_ibfk_8');
            $table->dropForeign('on_form_ibfk_10');
        });
    }
};
