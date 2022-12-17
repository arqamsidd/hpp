<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatCheckRecordToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->Integer('created_by')->default(0);
            $table->Integer('modified_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->Integer('deleted_by')->default(0);
            $table->Integer('status')->default(1);
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
            $table->dropColumn('created_by');
            $table->dropColumn('modified_by');
            $table->dropColumn('deleted_at');
            $table->dropColumn('deleted_by');
            $table->dropColumn('status');
        });
    }
}
