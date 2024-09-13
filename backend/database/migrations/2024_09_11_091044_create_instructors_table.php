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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id('ins_id');
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->date('dob');
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->longText('address')->nullable();
            $table->date('hire_date')->nullable();
            $table->integer('dep_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
