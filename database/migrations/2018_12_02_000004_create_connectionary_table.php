<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectionaryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'connectionary';

    /**
     * Run the migrations.
     * @table connectionary
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('service_id');
            $table->integer('user_id');
            $table->string('service_exchange_location', 80)->nullable()->default(null);
            $table->dateTime('service_start_time');
            $table->dateTime('service_end_time');
            $table->tinyInteger('service_provider_gps')->nullable()->default(null);
            $table->tinyInteger('service_receiver_gps')->nullable()->default(null);
            $table->integer('connection_price');
            $table->tinyInteger('request')->nullable()->default(null);
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
