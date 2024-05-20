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
        Schema::create('form_setting_document', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('form_id')->index('form_id');
            $table->bigInteger('document_id')->index('document_id');
            $table->string('name');
            $table->string('type');
            $table->integer('required');
            $table->unsignedBigInteger('created_by')->nullable()->index('form_setting_document_ibfk_3');
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
        Schema::dropIfExists('form_setting_document');
    }
};
