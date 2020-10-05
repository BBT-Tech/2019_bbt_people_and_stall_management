<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCampusIntoStallTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stall_tasks', function (Blueprint $table) {
            $table->enum('campus', ['大学城校区', '五山校区', '国际校区'])->after('stall_id')->nullable()->comment('校区');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stall_tasks', function (Blueprint $table) {
            $table->dropColumn('campus');
        });
    }
}
