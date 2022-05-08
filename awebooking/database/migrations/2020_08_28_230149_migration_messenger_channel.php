<?php

/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    2.0.18
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2019, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class MigrationMessengerChannel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_channel', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('channel_id', 255);
            $table->bigInteger('user_created');
            $table->bigInteger('user_joined');
            $table->bigInteger('last_user');
            $table->integer('last_time');
            $table->string('status')->default('open');
            $table->integer('created_at');
        });
    }


    public function down()
    {
        Schema::drop('messenger_channel');
    }
}
