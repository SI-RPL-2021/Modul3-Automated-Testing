<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('title',191)->nullable()->after('password');
            $table->text('description')->nullable()->after('title');
            $table->string('url',191)->nullable()->after('description');
            $table->string('avatar',191)->nullable()->after('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('deescription');
            $table->dropColumn('url');
            $table->dropColumn('avatar');
        });
    }
}
