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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('upload_name');
            $table->string('new_name');
            $table->string('upload_by');
            $table->string('upload_type');
            $table->string('file_ext');
            $table->string('upload_ref');
            $table->dateTime('upload_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('uploads');
    }
};
