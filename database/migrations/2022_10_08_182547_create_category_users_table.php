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
        Schema::create('category_users', function (Blueprint $table) {
            //$table->uuid('id')->primary();
            $table->foreignUuid('category_id')->constrained('categories');
            $table->foreignUuid('user_id')->constrained('users');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_users');
    }
};
