<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scheduled_bills', function (Blueprint $table) {
            $table->id();
            $table->dateTime('due_date');
            $table->decimal('amount', 10, 2);
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('child_category_id');
            $table->unsignedBigInteger('person_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('child_category_id')->references('id')->on('child_categories');
            $table->foreign('person_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduled_bills');
    }
};
