<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class File extends Model
{
    use HasFactory;

    /**
     * Many-to-Many relationship on headlines -> files.
     *
     * @return BelongsToMany
     */
    public function headlines(): BelongsToMany
    {
        return $this->belongsToMany(Headline::class);
    }
}
