<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BibleTranslation extends Model
{
    protected $fillable = ['short_name', 'full_name'];

    public function userPreferredTranslations(): HasMany
    {
        return $this->hasMany(UserPreferredTranslation::class, 'translation_id');
    }
}
