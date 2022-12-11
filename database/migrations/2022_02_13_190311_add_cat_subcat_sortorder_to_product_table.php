<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatSubcatSortorderToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->Integer('category_id')->unsigned()->nullable()->after('id');
            $table->Integer('subcategory_id')->unsigned()->nullable()->after('category_id');
            $table->Integer('sort_order')->default(0)->after('feature_image_path');
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
            $table->dropColumn('category_id');
            $table->dropColumn('subcategory_id');
            $table->dropColumn('sort_order');
        });
    }
}
