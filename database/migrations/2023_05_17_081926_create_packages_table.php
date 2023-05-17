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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->double('Monthly_amount', 8, 2);
            $table->string('Monthly_text');
            $table->double('Quarterly_amount', 8, 2);
            $table->string('Quarterly_text');
            $table->double('SemiAnnually_amount', 8, 2);
            $table->string('SemiAnnually_text');
            $table->double('Annually_amount', 8, 2);
            $table->string('Annually_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
