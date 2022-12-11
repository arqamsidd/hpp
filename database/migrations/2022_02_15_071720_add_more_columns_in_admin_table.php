<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsInAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->Integer('role')->unsigned()->nullable()->after('id')->comment('1 for super_admin, 2 for admin, 3 for data_entry_operator');
            $table->Integer('status')->default(1);
            $table->Integer('is_deleted')->default(0)->after('updated_at');
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
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('status');
            $table->dropColumn('is_deleted');
            $table->dropColumn('created_by');
            $table->dropColumn('modified_by');
            $table->dropColumn('deleted_at');
            $table->dropColumn('deleted_by');
        });
    }
}
