<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('music', function (Blueprint $table) {
            $table->boolean('week_list')->default(false);
        });
    }

    public function down()
    {
        Schema::table('music', function (Blueprint $table) {
            $table->dropColumn('week_list');
        });
    }
};
