<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->string('name');
            $table->longText('description');
            $table->unsignedInteger('rating')->default(0);
            $table->unsignedInteger('views')->default(0);
            $table->enum('levels',['beginner', 'immediate', 'high']);
            $table->unsignedInteger('hours');
            $table->boolean('active')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
