<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('research', function (BluePrint $table) {
            $table->string('title')->nullable();
            $table->json('targetMarket')->nullable();
            $table->json('avatar')->nullable();
            $table->json('currentState')->nullable();
            $table->json('dreamState')->nullable();
            $table->json('roadBlocks')->nullable();
            $table->json('solution')->nullable();
            $table->json('product')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('research', function (BluePrint $tabe) {
            $table->dropColumn(['category']);
        });
    }
}
