<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaderboard extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'leaderboard_id';
    protected $keyType = 'integer';
    public $table = 'bio9_leaderboard';
    protected $fillable = [
        'leaderboard_id',
        'name',
        'total_damage',
    ];
}
