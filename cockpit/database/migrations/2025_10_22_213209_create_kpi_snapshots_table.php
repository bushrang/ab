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
        Schema::create('kpi_snapshots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('platform'); // 'meta_ads', 'pinterest_ads', 'chatbot', 'newsletter', etc.
            $table->date('snapshot_date');
            $table->string('metric_name'); // 'spend', 'impressions', 'leads', 'subscribers', etc.
            $table->decimal('metric_value', 15, 2);
            $table->string('currency', 3)->nullable(); // 'EUR', 'USD', etc.
            $table->text('metadata')->nullable(); // JSON for additional context
            $table->timestamps();

            $table->index(['client_id', 'platform', 'snapshot_date']);
            $table->unique(['client_id', 'platform', 'snapshot_date', 'metric_name'], 'unique_kpi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpi_snapshots');
    }
};
