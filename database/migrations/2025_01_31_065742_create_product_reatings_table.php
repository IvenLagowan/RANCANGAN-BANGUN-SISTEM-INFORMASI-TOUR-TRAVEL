<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('product_ratings')) {
            Schema::create('product_ratings', function (Blueprint $table) {
                $table->id();
                $table->foreigId('product_id')->constrained()->onDelete('coscade');
                $table->string('username');
                $table->string('email');
                $table->string('comment');
                $table->integer('rating',2,3);
                $table->boolean('status')->default(0);
                $table->timestamps();
            });
        }
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_reatings');
    }
};
