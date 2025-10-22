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
        Schema::create('api_credentials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('platform'); // 'meta', 'pinterest', 'google_analytics', 'mailchimp', etc.
            $table->string('credential_key'); // e.g., 'access_token', 'api_key', 'client_id'
            $table->text('credential_value'); // Encrypted value
            $table->text('metadata')->nullable(); // JSON for additional data (account_id, etc.)
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index(['client_id', 'platform']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_credentials');
    }
};
