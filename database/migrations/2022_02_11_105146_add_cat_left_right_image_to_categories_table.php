<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatLeftRightImageToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('bg_left_image')->nullable()->after('bg_image_path');
            $table->string('bg_left_image_path')->nullable()->after('bg_left_image');
            $table->string('bg_right_image')->nullable()->after('bg_left_image_path');
            $table->string('bg_right_image_path')->nullable()->after('bg_right_image');
            $table->string('collection_image')->nullable()->after('bg_right_image_path');
            $table->string('collection_image_path')->nullable()->after('collection_image');
            $table->string('feature_image')->nullable()->after('collection_image_path');
            $table->string('feature_image_path')->nullable()->after('feature_image');
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
            $table->dropColumn('bg_left_image');
            $table->dropColumn('bg_left_image_path');
            $table->dropColumn('bg_right_image');
            $table->dropColumn('bg_right_image_path');
            $table->dropColumn('collection_image');
            $table->dropColumn('collection_image_path');
            $table->dropColumn('feature_image');
            $table->dropColumn('feature_image_path');
        });
    }
}
