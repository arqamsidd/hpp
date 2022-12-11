<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title');
            $table->text('slug');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('bg_image')->nullable();
            $table->string('bg_image_path')->nullable();
            $table->string('collection_image')->nullable();
            $table->string('collection_image_path')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('feature_image_path')->nullable();
            $table->Integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
