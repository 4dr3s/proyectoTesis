<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function Canton():BelongsTo
    {
        return $this->belongsTo(Canton::class);
    }

    public function Country_live():BelongsTo
    {
        return $this->belongsTo(Country_live::class);
    }

    public function Country_origin():BelongsTo
    {
        return $this->belongsTo(Country_origin::class);
    }

    public function Document():BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function Ethnicity():BelongsTo
    {
        return $this->belongsTo(Ethnicity::class);
    }

    public function Institution():BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function Mechanism_title():BelongsTo
    {
        return $this->belongsTo(Mechanism_title::class);
    }

    public function Province():BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function School():BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function Sex():BelongsTo
    {
        return $this->belongsTo(Sex::class);
    }

    public function User():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
