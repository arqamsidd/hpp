<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTheNewPageUpdateType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_page', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->change();
            $table->string('meta_keywords')->nullable()->change();
            $table->text('meta_description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_page', function (Blueprint $table) {
            //
        });
    }
}
