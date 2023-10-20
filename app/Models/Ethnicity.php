<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ethnicity extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Student():HasMany
    {
        return $this->hasMany(Student::class);
    }
}
