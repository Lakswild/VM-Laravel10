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
        Schema::table('setting_document', function (Blueprint $table) {
            $table->foreign(['account_group_id'], 'setting_document_ibfk_4')->references(['id'])->on('account_group');
            $table->foreign(['company_id'], 'setting_document_ibfk_1')->references(['id'])->on('company');
            $table->foreign(['type_id'], 'setting_document_ibfk_3')->references(['id'])->on('type');
            $table->foreign(['document_id'], 'setting_document_ibfk_2')->references(['id'])->on('document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting_document', function (Blueprint $table) {
            $table->dropForeign('setting_document_ibfk_4');
            $table->dropForeign('setting_document_ibfk_1');
            $table->dropForeign('setting_document_ibfk_3');
            $table->dropForeign('setting_document_ibfk_2');
        });
    }
};
