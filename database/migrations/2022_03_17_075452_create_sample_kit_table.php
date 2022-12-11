<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampleKitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_kit', function (Blueprint $table) {
            $table->id();
            $table->string('page_url');
            $table->text('msg');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('ip2loc_ip')->nullable();
            $table->string('ip2loc_isp')->nullable();
            $table->string('ip2loc_org')->nullable();
            $table->string('ip2loc_country')->nullable();
            $table->string('ip2loc_region')->nullable();
            $table->string('ip2loc_city')->nullable();
            $table->timestamps();
            $table->Integer('is_deleted')->default(0);
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
        Schema::dropIfExists('sample_kit');
    }
}
