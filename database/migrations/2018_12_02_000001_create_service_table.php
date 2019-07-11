<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'service';

    /**
     * Run the migrations.
     * @table service
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 25);
            $table->string('location', 80);
            $table->string('city', 25);
            $table->string('country', 25);
            $table->text('description');
            $table->string('open_time', 2);
            $table->string('end_time', 2);
            $table->string('support_number', 15);
            $table->integer('price')->nullable()->default(null);
            $table->integer('available_spots')->nullable()->default(null);
            $table->decimal('minimum_interval', 10, 0)->nullable()->default(null);
            $table->decimal('maximum_interval', 11, 0)->nullable()->default(null);
            $table->string('price_per', 25)->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->integer('auth')->default(0);
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
