<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kind')->nullable();
            $table->string('grade')->nullable();
            $table->string('university')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('field')->nullable();
            $table->string('tashakol')->nullable();
            $table->string('semat')->nullable();
            $table->string('sazman')->nullable();

            $table->string('type')->nullable();
            $table->string('ip')->nullable();
            $table->string('timer')->nullable();

            $table->string('etc1')->nullable();
            $table->string('etc2')->nullable();
            $table->string('etc3')->nullable();
            $table->string('etc4')->nullable();

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
        Schema::dropIfExists('register_users');
    }
}
