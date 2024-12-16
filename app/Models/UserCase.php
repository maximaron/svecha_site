<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserCase extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'name',
        'email',
        'specific_person',
        'third_part',
        'going_on',
        'previous_contact',
        'uuid',
        'payment_status',
        'video_sended',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
