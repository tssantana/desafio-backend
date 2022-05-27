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
            $table->string('companyName', 200);
            $table->string('exchange', 200);
            $table->string('industry', 200);
            $table->string('website', 200);
            $table->string('description', 200);
            $table->string('CEO', 200);
            $table->string('securityName', 200);
            $table->string('issueType', 200);
            $table->string('sector', 200);
            $table->integer('primarySicCode');
            $table->integer('employees');
            $table->string('tags', 200);
            $table->string('address', 200);
            $table->string('address2', 200);
            $table->string('state', 200);
            $table->string('city', 200);
            $table->string('zip', 200);
            $table->string('country', 200);
            $table->string('phone', 200);
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
