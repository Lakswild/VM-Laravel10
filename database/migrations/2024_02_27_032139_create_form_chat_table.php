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
        Schema::create('form_chat', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('form_id')->index('form_id');
            $table->unsignedBigInteger('from')->nullable()->index('form_chat_ibfk_2');
            $table->text('message');
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
        Schema::dropIfExists('form_chat');
    }
};
