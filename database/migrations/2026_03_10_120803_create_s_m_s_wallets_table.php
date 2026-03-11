<?php

use App\Models\Clients;
use App\Models\Subscriptions;
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
        Schema::create('sms_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Clients::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Subscriptions::class)->constrained()->cascadeOnDelete();
            $table->decimal('balance', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_wallets');
    }
};
