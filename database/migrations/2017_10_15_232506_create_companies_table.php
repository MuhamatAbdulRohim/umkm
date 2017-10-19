<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->char('company_name', 100);
            $table->string('about_company');
            $table->string('address');
            $table->char('district', 100);
            $table->char('province', 100);
            $table->text('maps');
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('twitter_url');
            $table->char('handphone', 15);
            $table->char('email', 100);
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
        Schema::dropIfExists('companies');
    }
}
