<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterDormitoryLengthDetailsTable extends Migration
{

    public function __construct()
    {
        DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->string('dormitory', 20)->nullable()->comment('宿舍楼')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('details', function (Blueprint $table) {
            $table->string('dormitory', 5)->nullable()->comment('宿舍楼')->change();
        });
    }
}
