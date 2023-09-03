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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string("university_name");
            $table->string("institution_type");
            $table->string("campus");
            $table->string("moi");
            $table->string("last_percentage");
            $table->string("fees");
            $table->string("ielts");
            $table->string("deadline");
            $table->string("admission_document");
            $table->string("accreditation");
            $table->string("ranking");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
