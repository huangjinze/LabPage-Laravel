<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('college')->nullable();
            $table->string('university')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mail')->nullable();
            $table->string('lab_address')->nullable();
            $table->string('image_url')->nullable();
            $table->longText('introduction')->nullable();
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
        Schema::dropIfExists('groups');
    }
}
