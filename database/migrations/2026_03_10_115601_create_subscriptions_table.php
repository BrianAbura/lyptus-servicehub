<?php

use App\Models\Clients;
use App\Models\Services;
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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Clients::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Services::class)->constrained()->cascadeOnDelete();
            $table->date('start_date');
            $table->date('expiry_date')->nullable();
            $table->enum('status', ['Active', 'Expired', 'Cancelled'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
