<?php namespace BootstrapHunter\Support\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('bootstraphunter_support_tickets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('subject');
            $table->integer('created_by')->unsigned();
            $table->integer('assigned_to')->unsigned();
            $table->integer('status')->unsigned();
            $table->integer('type')->unsigned();
            $table->integer('last_message')->unsigned();
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down()
    {
        Schema::drop('bootstraphunter_support_tickets');
    }
}
