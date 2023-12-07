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
        Schema::create('on_form_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('form_id')->index('form_id');
            $table->integer('tipe_input_id')->index('tipe_input_id');
            $table->string('nama');
            $table->longText('teks')->nullable();
            $table->string('dokumen')->nullable();
            $table->enum('valid', ['1', '0'])->nullable();
            $table->integer('status_id')->nullable()->index('status_id');
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
        Schema::dropIfExists('on_form_detail');
    }
};
