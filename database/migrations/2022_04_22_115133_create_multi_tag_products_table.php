<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiTagProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_tag_products', function (Blueprint $table) {
            $table->id();
            $table->Integer('cat_id')->default(0);
            $table->Integer('sub_cat_id')->default(0);
            $table->Integer('product_id')->default(0);
            $table->Integer('sort_order')->default(0);
            $table->tinyInteger('is_deleted')->default(0);
            $table->Integer('created_by')->default(0);
            $table->Integer('modified_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->Integer('deleted_by')->default(0);
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
        Schema::dropIfExists('multi_tag_products');
    }
}
