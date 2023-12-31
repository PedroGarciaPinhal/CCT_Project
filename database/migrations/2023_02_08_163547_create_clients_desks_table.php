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
        Schema::create('clients_desks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desks_id')->constrained();
            $table->foreignId('reservations_id')->constrained();
            $table->foreignId('users_id')->constrained();
            $table->date('reservation_date')->default(now()->format('Y-m-d'));
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
        Schema::dropIfExists('clients_desks');
    }
};
