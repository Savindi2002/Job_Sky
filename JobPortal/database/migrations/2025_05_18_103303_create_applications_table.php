<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('applications', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('job_post_id')->constrained()->onDelete('cascade');
    $table->string('full_name');
    $table->string('email');
    $table->string('phone');
    $table->string('linkedin')->nullable();
    $table->decimal('experience', 4, 1); // e.g., 3.5 years
    $table->text('key_skills');
    $table->string('resume_path'); // store file path
    $table->string('status')->default('1');
    $table->date('applied_date');
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
        Schema::dropIfExists('applications');
    }
}
