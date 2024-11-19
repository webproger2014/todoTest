<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\TodoStatus\Models\TodoStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc')->nullable();
            $table->foreignIdFor(TodoStatus::class)
                ->default(1)
                ->constrained();
            $table->foreignId('creator_id')
                ->constrained(
                    table: 'users'
                );
            $table->foreignId('responsible_id')
                ->constrained(
                    table: 'users'
                );    
            $table->timestamp('deadline_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
