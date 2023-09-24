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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->string('password',255);
            $table->enum('gender',["M","F","O"]);
            $table->date('dob');
            $table->varchar('hobby',["Cricket","Dance","Reading","Painting","Singing"]);
            $table->text('address');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
