<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'alias',
        'reppin',
        'division',
        'bday',
        'address',
        'cred_email',
        'cred_fb',
        'cred_cp',
        'lyric_song',
        'lyric_battle',
        'link_song',
        'link_battle',
        'link_others'
    ];

    public $allow_export_all = true;
}