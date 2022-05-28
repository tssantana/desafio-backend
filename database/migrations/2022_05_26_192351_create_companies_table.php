<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('symbol', 200)->primary();
            $table->timestamps();
            $table->string('companyName', 200)->nullable();
            $table->string('exchange', 200)->nullable();
            $table->string('industry', 200)->nullable();
            $table->string('website', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('CEO', 200)->nullable();
            $table->string('securityName', 200)->nullable();
            $table->string('issueType', 200)->nullable();
            $table->string('sector', 200)->nullable();
            $table->integer('primarySicCode')->nullable();
            $table->integer('employees')->nullable();
            $table->string('tags', 200)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('address2', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('zip', 200)->nullable();
            $table->string('country', 200)->nullable();
            $table->string('phone', 200)->nullable();
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
