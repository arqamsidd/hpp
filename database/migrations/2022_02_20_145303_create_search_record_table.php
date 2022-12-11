<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_record', function (Blueprint $table) {
            $table->id();
            $table->text('slug')->nullable();;
            $table->text('name')->nullable();
            $table->Integer('status')->default(1);
            $table->Integer('type_id');
            $table->Integer('type')->comment('1 for cat, 2 for sub_cat, 3 for product');
            $table->Integer('sort_order')->default(0);
            $table->timestamps();
            $table->Integer('is_deleted')->default(0);
            $table->Integer('created_by')->default(0);
            $table->Integer('modified_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->Integer('deleted_by')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_record');
    }
}
