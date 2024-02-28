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
        Schema::create('setting_document', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('company_id')->index('company_id');
            $table->bigInteger('document_id')->index('document_id');
            $table->bigInteger('type_id')->index('type_id');
            $table->bigInteger('account_group_id')->index('account_group_id');
            $table->integer('required');
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
        Schema::dropIfExists('setting_document');
    }
};
