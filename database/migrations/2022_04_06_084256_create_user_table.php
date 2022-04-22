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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->integer('github_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact_email');
            $table->string('phone')->nullable();
            $table->string('company_name');
            $table->string('address');
            $table->integer('siret');
            $table->integer('ape');
            $table->string('account_user');
            $table->string('domiciliation');
            $table->string('iban');
            $table->string('rib');
            $table->string('bic');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
};
