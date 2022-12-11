<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCtaColumnsToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
          $table->string('cta_image')->after('collection_image_path')->nullable();
          $table->string('cta_image_path')->after('collection_image_path')->nullable();
          $table->string('cta_image_alt')->after('collection_image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
          $table->dropColumn('cta_image');
          $table->dropColumn('cta_image_path');
          $table->dropColumn('cta_image_alt');
        });
    }
}
