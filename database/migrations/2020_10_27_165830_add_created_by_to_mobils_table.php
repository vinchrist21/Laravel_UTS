<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByToMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mobils', function (Blueprint $table) {
            //menambah kolom baru di table mobils
            $table->unsignedBigInteger('created_by')->index()->after('description')->nullable();

            //foreign di created_by
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobils', function (Blueprint $table) {
            //
            $table->dropColumn('created_by');
        });
    }
}
