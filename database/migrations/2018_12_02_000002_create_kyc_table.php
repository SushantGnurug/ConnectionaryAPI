<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKycTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'kyc';

    /**
     * Run the migrations.
     * @table kyc
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('permanent_district', 15);
            $table->string('permanent_municipality_vdc', 15);
            $table->integer('permanent_ward_no');
            $table->string('permanent_street', 25)->nullable()->default(null);
            $table->string('permanent_house_no', 25)->nullable()->default(null);
            $table->string('permanent_landline_no', 10)->nullable()->default(null);
            $table->string('permanent_mobile_no', 10)->nullable()->default(null);
            $table->string('temporary_district', 15);
            $table->string('temporary_municipality_vdc', 15);
            $table->integer('temporary_ward_no');
            $table->string('temporary_street', 25);
            $table->string('temporary_house_no', 25)->nullable()->default(null);
            $table->string('temporary_landline_no', 10)->nullable()->default(null);
            $table->string('temporary_mobile_no', 10)->nullable()->default(null);
            $table->string('citizenship_no', 25);
            $table->string('citizenship_issued_district', 25);
            $table->date('citizenship_issued_date');
            $table->string('grandfather_name', 30);
            $table->string('father_name', 30);
            $table->string('mother_name', 30);
            $table->string('spouse_name', 30)->nullable()->default(null);
            $table->string('identification_image', 30);
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
       Schema::dropIfExists($this->set_schema_table);
     }
}
