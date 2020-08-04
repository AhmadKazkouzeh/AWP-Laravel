<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tasks'))  {
            Schema::create('tasks', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('project_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->string('posted_by', 255);
                $table->string('title', 255);
                $table->date('start_date');
                $table->date('end_date');
                $table->boolean('status')->default(false);
                $table->string('category');
                $table->longText('description');
                $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
