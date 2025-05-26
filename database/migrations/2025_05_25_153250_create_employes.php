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
        Schema::create('employes', function (Blueprint $table) {
            $table->id("employeId");
             $table->string("employeName");
            $table->string("email");
            $table->string("password");
            $table->enum("departement",["HR","QR","networking","development"]);
            $table->enum("city",["karachi","islamabad","lahore"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
