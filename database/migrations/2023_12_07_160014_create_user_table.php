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
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('no');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->enum('aktif', ['1', '0']);
            $table->enum('su', ['1', '0']);
            $table->integer('level_id')->index('level_id');
            $table->integer('perusahaan_id')->index('perusahaan_id');
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
        Schema::dropIfExists('user');
    }
};
