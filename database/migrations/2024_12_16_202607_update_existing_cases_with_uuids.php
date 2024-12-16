<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\UserCase;

class UpdateExistingCasesWithUuids extends Migration
{
    public function up()
    {
        UserCase::whereNull('uuid')->orWhere('uuid', '')->chunkById(100, function ($cases) {
            foreach ($cases as $case) {
                $case->uuid = (string) Str::uuid();
                $case->save();
            }
        });
    }

    public function down()
    {
        // No need to reverse this operation
    }
}
