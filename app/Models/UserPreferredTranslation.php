<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPreferredTranslation extends Model
{
    protected $fillable = ['user_id', 'translation_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function translation(): BelongsTo
    {
        return $this->belongsTo(BibleTranslation::class, 'translation_id');
    }
}
