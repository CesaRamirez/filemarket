<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileApprovals extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('file_approvals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('file_id')->unsigned()->index();
            $table->string('title');
            $table->string('overview_short', 300);
            $table->text('overview');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('file_approvals');
    }
}
