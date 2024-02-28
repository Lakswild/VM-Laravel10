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
        Schema::table('form_setting_document', function (Blueprint $table) {
            $table->foreign(['form_id'], 'form_setting_document_ibfk_1')->references(['id'])->on('form');
            $table->foreign(['created_by'], 'form_setting_document_ibfk_3')->references(['id'])->on('users');
            $table->foreign(['document_id'], 'form_setting_document_ibfk_2')->references(['id'])->on('document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_setting_document', function (Blueprint $table) {
            $table->dropForeign('form_setting_document_ibfk_1');
            $table->dropForeign('form_setting_document_ibfk_3');
            $table->dropForeign('form_setting_document_ibfk_2');
        });
    }
};
