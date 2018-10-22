<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_registration_forms', function (Blueprint $table) {
            $table->increments('id');
			$table->string('company_photo');
			$table->string('company_name');
			$table->string('company_address');
			$table->string('province');
			$table->string('account_executive');
			$table->string('year_started');
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
        Schema::dropIfExists('company_registration_forms');
    }
}
