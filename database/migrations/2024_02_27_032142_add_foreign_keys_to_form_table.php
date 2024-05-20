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
            $table->foreign(['region_id'], 'form_ibfk_4')->references(['id'])->on('region');
            $table->foreign(['company_id'], 'form_ibfk_1')->references(['id'])->on('company');
            $table->foreign(['account_group_id'], 'form_ibfk_3')->references(['id'])->on('account_group');
            $table->foreign(['created_by'], 'form_ibfk_5')->references(['id'])->on('users')->onUpdate('NO ACTION');
            $table->foreign(['type_id'], 'form_ibfk_2')->references(['id'])->on('type');
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
            $table->dropForeign('form_ibfk_4');
            $table->dropForeign('form_ibfk_1');
            $table->dropForeign('form_ibfk_3');
            $table->dropForeign('form_ibfk_5');
            $table->dropForeign('form_ibfk_2');
        });
    }
};
