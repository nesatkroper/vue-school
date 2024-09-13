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
        Schema::create('students', function (Blueprint $table) {
            $table->id('stu_id');
            $table->string('photo')->nullable();
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->date('dob')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->longText('address')->nullable();
            $table->date('enrollment')->default(today());
            $table->integer('cou_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active')->nullable();
            $table->enum('isDelete', ['false', 'true'])->default('false')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};