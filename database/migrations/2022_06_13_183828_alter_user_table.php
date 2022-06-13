<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->default('de Vries')->after('id');
            $table->string('first_name')->default('Henk')->after('id');

            $table->dropColumn('name');
        });

        // Get rid of defaults again
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->default(null)->change();
            $table->string('first_name')->default(null)->change();
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
            $table->dropColumn('last_name');
            $table->dropColumn('first_name');

            $table->string('name')->default('Henk de Vries')->after('email');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->default(null)->change();
        });
    }
};
