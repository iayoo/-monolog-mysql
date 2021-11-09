<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemErrorLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            env('DB_LOG_TABLE', 'logs'),
            function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->bigIncrements('id');
                $table->string('request_uri');
                $table->string('instance')->index();
                $table->string('channel')->index();
                $table->string('level')->index();
                $table->string('level_name');

                $table->longText('message');
                $table->longText('context');


                $table->integer('remote_addr')->nullable()->unsigned();
                $table->string('user_agent')->nullable();
                $table->integer('created_by')->nullable()->index();

                $table->dateTime('created_at');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(env('DB_LOG_TABLE', 'logs'));
    }
}
