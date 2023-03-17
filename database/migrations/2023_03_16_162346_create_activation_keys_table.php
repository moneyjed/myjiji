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
        Schema::create('activation_keys', function (Blueprint $table) {
            $table->id();
            $table->string('a_key');
            $table->string('set_for');
            $table->dateTime('set_date');
            $table->string('status');
            $table->dateTime('use_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('activation_keys');
    }
};
