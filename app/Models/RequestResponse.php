<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestResponse extends Model
{
    use HasFactory;

    protected $fillable=[
        'action',
        'contact',
        'email',
        'name_accept',
        'request_accepted',
        'name_reject',
        'request_rejected',
        'reason'
    ];
}
