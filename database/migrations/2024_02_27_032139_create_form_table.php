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
        Schema::create('form', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('code')->nullable();
            $table->bigInteger('company_id')->index('company_id');
            $table->bigInteger('type_id')->index('type_id');
            $table->bigInteger('account_group_id')->index('account_group_id');
            $table->string('name');
            $table->integer('is_plantation');
            $table->bigInteger('region_id')->index('region_id');
            $table->text('city');
            $table->text('districts');
            $table->text('street');
            $table->string('phone_number', 15);
            $table->string('email');
            $table->integer('tax');
            $table->string('npwp');
            $table->string('nik');
            $table->unsignedBigInteger('created_by')->nullable()->index('form_ibfk_5');
            $table->enum('status', ['approved', 'is being submitted', 'rejected']);
            $table->enum('step', ['purchasing', 'master data', 'approval'])->default('purchasing');
            $table->integer('step_approval');
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
        Schema::dropIfExists('form');
    }
};
