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
        Schema::table('form_document', function (Blueprint $table) {
            $table->foreign(['form_id'], 'form_document_ibfk_1')->references(['id'])->on('form');
            $table->foreign(['created_by'], 'form_document_ibfk_2')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_document', function (Blueprint $table) {
            $table->dropForeign('form_document_ibfk_1');
            $table->dropForeign('form_document_ibfk_2');
        });
    }
};
