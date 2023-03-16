<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chat_responses', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->timestamps('resp_time');
            $table->string('has_attachment')->nullable();
            $table->string('attached_file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('chat_responses');
    }
};
