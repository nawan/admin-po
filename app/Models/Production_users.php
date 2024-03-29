<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production_users extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function production()
    {
        return $this->belongsTo(Production::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
