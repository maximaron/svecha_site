<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCasesTable extends Migration
{
    public function up()
    {
        Schema::table('cases', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->after('id');
            $table->string('payment_status')->default('pending')->after('email');
            $table->boolean('video_sended')->default(false)->after('payment_status');
        });
    }

    public function down()
    {
        Schema::table('cases', function (Blueprint $table) {
            $table->dropColumn(['uuid', 'payment_status', 'video_sended']);
        });
    }
}
