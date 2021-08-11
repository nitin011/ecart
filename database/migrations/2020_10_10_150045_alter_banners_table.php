<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner', function (Blueprint $table) {
            $table->string('sub_title')->nullable();
            $table->string('slogan')->nullable();
            $table->string('type')->nullable();
            $table->string('button_title')->nullable();
            $table->string('button_route')->nullable();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->string('device_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner', function (Blueprint $table) {
            $table->dropColumn(['title', 'sub_title', 'short_description', 'slogan', 'type', 'button_title', 'button_route']);
        });
    }
}
