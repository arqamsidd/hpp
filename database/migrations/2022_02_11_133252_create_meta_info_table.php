<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_info', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->text('meta_description');
            $table->Integer('type_id');
            $table->Integer('type')->comment('1 for cat, 2 for sub_cat, 3 for product');
            $table->tinyInteger('is_deleted')->default(0);
            $table->Integer('created_by')->default(0);
            $table->Integer('modified_by')->default(0);
            $table->Integer('deleted_by')->default(0);
            $table->string('deleted_at',100)->nullable();
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
        Schema::dropIfExists('meta_info');
    }
}
