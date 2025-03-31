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
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('admin_id')->primary();
            $table->string('name');
            $table->string('password');
        });
        

        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('order_id')->primary();
            $table->string('name');
            $table->string('contactno');
            $table->integer('weight')->default(0);
            $table->float('payable')->default(0);
            $table->timestamp('order_date')->useCurrent();
            $table->timestamp('pickup_date')->nullable()->default(null);
            $table->tinyInteger('paid')->default(0);
            $table->enum('status', ['pending', 'processing', 'completed'])->default('pending');
        });

       
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
