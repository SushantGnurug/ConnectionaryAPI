<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'experience';

    /**
     * Run the migrations.
     * @table experience
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('experience_id');
            $table->integer('user_id');
            $table->string('organization_name', 50);
            $table->string('organization_location', 50);
            $table->string('job_title', 50);
            $table->text('description');
            $table->date('start_date');
            $table->string('job_level', 50);
            $table->date('end_date');
            $table->tinyInteger('currently_working');
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
