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
        Schema::create('employee_leave_balances', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->json('leave_type')->nullable(); // Change to JSON
            $table->json('leave_balance')->default(json_encode([]));
            $table->string('status')->default('Granted');
            $table->json('from_date')->default(json_encode([]));
            $table->json('to_date')->default(json_encode([]));
            $table->timestamps();
            $table->foreign('emp_id')
            ->references('emp_id')
            ->on('employee_details')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unique(['emp_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_leave_balances');
    }
};