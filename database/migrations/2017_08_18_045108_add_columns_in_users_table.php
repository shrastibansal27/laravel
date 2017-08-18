<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::dropIfExists('users');
        Schema::table('users',function ($table){
            $table->string('fname')->after('email');
            $table->string('lname')->after('fname');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('users');
    //     Schema::table('users', function($table) {
    //     $table->dropColumn('fname'); 
    //     $table->dropColumn('lname');
    // });
    }
}
