<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessageType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create message type.
         Schema::table('messages', function ($collection) {
            $collection->enum('type', ['schedule', 'fetch'])->after('day_to_send');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop message type.
        Schema::table('messages', function($table)
        {
            $table->dropColumn('type');
        });
    }
}
