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
        Schema::create('historical_logs', function (Blueprint $table) {
            $table->id();
            $table->decimal('ejex', 6, 2);
            $table->decimal('ejey', 6, 2);
            $table->decimal('bateria', 6, 2);
            $table->decimal('ldr1', 6, 2);
            $table->decimal('ldr2', 6, 2);
            $table->decimal('ldr3', 6, 2);
            $table->decimal('ldr4', 6, 2);
            $table->binary('file');
            $table->timestamps();
        });
        
        $sql = 'alter table historical_logs change file file longblob';
        DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_logs');
    }
};
