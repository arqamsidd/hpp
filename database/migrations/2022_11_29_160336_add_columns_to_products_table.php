<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->string('whyus_title')->nullable();
          $table->string('background_title')->nullable();
          $table->longText('background_desc')->nullable();
          $table->longText('whyus_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
          $table->dropColumn('whyus_title');
          $table->dropColumn('background_title');
          $table->dropColumn('background_desc');
          $table->dropColumn('whyus_desc');
        });
    }
}
