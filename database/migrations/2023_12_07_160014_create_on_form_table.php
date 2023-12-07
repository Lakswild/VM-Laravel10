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
        Schema::create('on_form', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('jenis_id')->index('jenis_id');
            $table->integer('akun_id')->index('akun_id');
            $table->integer('user_id')->index('user_id');
            $table->integer('pembelian_id')->index('pembelian_id');
            $table->string('nama_vendor');
            $table->integer('ketentuan_id')->index('ketentuan_id');
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('kode_pos');
            $table->integer('provinsi_id')->index('provinsi_id');
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->enum('pajak', ['1', '0'])->nullable();
            $table->integer('ketentuan_pembayaran_id')->index('ketentuan_pembayaran_id');
            $table->integer('metode_pembayaran_id')->index('metode_pembayaran_id');
            $table->integer('mata_uang_id')->index('mata_uang_id');
            $table->integer('skema_vendor_id')->index('skema_vendor_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_form');
    }
};
