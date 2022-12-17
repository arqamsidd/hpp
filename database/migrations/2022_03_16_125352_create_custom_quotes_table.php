<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('page_url');
            $table->string('material');
            $table->string('length');
            $table->string('width');
            $table->string('depth');
            $table->string('unit');
            $table->string('quantity');
            $table->string('printing');
            $table->string('card_thickness');
            $table->string('extra_finishes');
            $table->string('coating_lamination');
            $table->text('description');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('custom_quotes');
    }
}
