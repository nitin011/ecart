<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('admin', 'admins');
        Schema::table('admins', function (Blueprint $table) {
            $table->renameColumn('admin_name', 'name');
            $table->renameColumn('admin_email', 'email');
            $table->renameColumn('admin_image', 'image')->nullable();
            $table->renameColumn('admin_pass', 'password');
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
