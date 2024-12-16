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
        Schema::create('cases', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->uuid('uuid')->unique();
            $table->string('name'); // Name of the person
            $table->string('email'); // Email of the person
            $table->string('payment_status')->default('pending');
            $table->boolean('video_sended')->default(false);
            $table->string('specific_person')->nullable(); // Details about a specific person (optional)
            $table->string('third_part')->nullable(); // Details about third party (optional)
            $table->text('going_on')->nullable(); // Description of what's going on (optional)
            $table->text('previous_contact')->nullable(); // Whether there was a previous contact
            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
};
