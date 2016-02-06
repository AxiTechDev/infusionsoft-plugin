<?php namespace One47\InfusionsoftAPI\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('one47_infusionsoftapi_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('one47_infusionsoftapi_settings');
    }

}
