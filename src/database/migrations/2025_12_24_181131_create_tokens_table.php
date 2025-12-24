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
    Schema::create('tokens', function (Blueprint $table) {
        $table->id();
        $table->string('token_number'); //  A001, B005
        $table->string('service_type'); //  Payments, Inquiry
        $table->string('status')->default('waiting'); // waiting, calling, completed
        $table->integer('counter_number')->nullable(); //  counter 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
