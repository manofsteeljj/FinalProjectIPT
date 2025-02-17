<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident_id',
        'user_id',
        'comment',
    ];

    // Relationship with Incident
    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
