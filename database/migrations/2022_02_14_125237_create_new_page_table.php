<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_page', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('page_slug');
            $table->Integer('status')->default(1);
            $table->Integer('sort_order')->default(0);
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->string('schema_script_other');
            $table->text('meta_description');
            $table->timestamps();
            $table->Integer('created_by')->default(0);
            $table->Integer('modified_by')->default(0);
            $table->tinyInteger('is_deleted')->default(0);
            $table->Integer('deleted_by')->default(0);
            $table->string('deleted_at',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_page');
    }
}
