<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Treatment;


class Patient extends Model
{
    use HasFactory;

    public function Owner(): HasMany {
        return $this->hasMany(Treatment::class);
    }
}
