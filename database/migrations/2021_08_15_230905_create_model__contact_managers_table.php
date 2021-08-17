<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelContactManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model__contact_managers', function (Blueprint $table) {
            $table->id();
            $table->string('account_name');
            $table->string('acc_password');
            $table->string('email_or_phone');
            $table->string('account_id');
            $table->string('token');
            $table->string('acc_create_date');
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
        Schema::dropIfExists('model__contact_managers');
    }
}
