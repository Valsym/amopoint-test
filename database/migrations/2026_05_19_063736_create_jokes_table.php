<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jokes', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->text('setup');
            $table->text('punchline');
            $table->integer('api_id')->unique(); // id из API, чтобы не дублировать
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jokes');
    }
};

