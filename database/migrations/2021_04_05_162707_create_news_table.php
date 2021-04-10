<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('district_name')->nullable();
            $table->string('edition')->nullable();
            $table->string('is_approved')->nullable();
            $table->string('live_location')->nullable();
            $table->longText('long_content')->nullable();
            $table->longText('news_content')->nullable();
            $table->string('news_hash')->nullable();
            $table->string('news_title')->nullable();
            $table->string('photos_vid')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('should_notify')->nullable();
            $table->string('what_is')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
