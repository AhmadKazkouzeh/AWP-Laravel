<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('projects'))  {

            Schema::create('projects', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id')->unsigned();
                $table->string('posted_by', 255);
                $table->string('title', 255);
                $table->longText('img')->nullable();
                $table->date('start_date');
                $table->date('end_date');
                $table->longText('about');
                $table->boolean('status')->default(false);
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
        Schema::dropIfExists('projects');
    }
}
