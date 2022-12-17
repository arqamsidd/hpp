<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColToSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->string('bg_image')->nullable()->after('sub_cat_title');
            $table->string('bg_image_path')->nullable()->after('bg_image');
            $table->string('bg_left_image')->nullable()->after('bg_image_path');
            $table->string('bg_left_image_path')->nullable()->after('bg_left_image');
            $table->string('bg_right_image')->nullable()->after('bg_left_image_path');
            $table->string('bg_right_image_path')->nullable()->after('bg_right_image');
            $table->string('collection_image')->nullable()->after('bg_right_image_path');
            $table->string('collection_image_path')->nullable()->after('collection_image');
            $table->string('feature_image')->nullable()->after('collection_image_path');
            $table->string('feature_image_path')->nullable()->after('feature_image');
            $table->Integer('status')->default(1);
            $table->string('slug');
            $table->Integer('sort_order')->default(0);
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
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->dropColumn('bg_image');
            $table->dropColumn('bg_image_path');
            $table->dropColumn('bg_left_image');
            $table->dropColumn('bg_left_image_path');
            $table->dropColumn('bg_right_image');
            $table->dropColumn('bg_right_image_path');
            $table->dropColumn('collection_image');
            $table->dropColumn('collection_image_path');
            $table->dropColumn('feature_image');
            $table->dropColumn('feature_image_path');
            $table->dropColumn('created_by');
            $table->dropColumn('modified_by');
            $table->dropColumn('deleted_at');
            $table->dropColumn('deleted_by');
            $table->dropColumn('status');
            $table->dropColumn('sort_order');
        });
    }
}
