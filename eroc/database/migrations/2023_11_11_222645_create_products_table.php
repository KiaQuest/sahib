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
        Schema::create('products', function (Blueprint $table) {
//            $table->id();
//            $table->bigIncrements('ilanID')->from(100001);
//            $table->increments('id')->start_from(100001);
            $table->id()->startingValue(1000001);
            $table->string('tip')->nullable();
            $table->string('oda')->nullable();
            $table->string('yas')->nullable();
            $table->string('kat')->nullable();
            $table->string('banyo')->nullable();
            $table->string('balkon')->nullable();
            $table->string('esiali')->nullable();
            $table->string('aidat')->nullable();
            $table->string('kimden')->nullable();
            $table->string('fiat')->nullable();
            $table->string('img')->nullable();
            $table->timestamp('tarih')->useCurrent();
            $table->string('m2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
