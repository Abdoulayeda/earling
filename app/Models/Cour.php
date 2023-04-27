<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Contenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'prix',
        'user_id',
        'categorie_id'
    ];

    public function contenus(): HasMany
    {
        return $this->hasMany(Contenu::class);
    }

    public function premiereImage()
    {
        return $this->hasMany(Image::class)->first();
    }

    public function images():HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
