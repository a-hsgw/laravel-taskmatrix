<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('task');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('importance_id')->constrained()->cascadeOnDelete();
            $table->foreignId('urgencies_id')->constrained()->cascadeOnDelete();
            $table->boolean('done')->default(false);      
            $table->boolean('pend')->default(false);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
