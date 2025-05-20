<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('job_posts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
    $table->string('title');
    $table->text('description')->nullable();
    $table->text('key_responsibilities')->nullable();
    $table->text('requirements')->nullable();
    $table->date('posted_date');
    $table->string('location');
    $table->decimal('salary', 10, 2)->nullable();
    $table->timestamps();
    $table->boolean('is_visible')->default(true);
    $table->integer('status');
    $table->string('jobtype');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobposts');
    }
}
