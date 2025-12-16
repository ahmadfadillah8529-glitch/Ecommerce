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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->string('order_number', 50)->unique();
            $table->decimal('total_amount', 15, 2);
            $table->decimal('shopping_cost', 12, 2)->default(0);
            $table->enum('status', [
                'pending',      // Menunggu pembayaran
                'processing',   // Pembayaran diterima, sedang diproses
                'shipped',      // Sudah dikirim
                'delivered',    // Sudah diterima
                'cancelled'     // Dibatalkan
            ])->default('pending');
            $table->string('shopping_name');
            $table->string('shopping_phone', 20);
            $table->text('shopping_address');
            $table->string('payment_method')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->index('order_number');
            $table->index('status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
