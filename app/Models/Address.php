<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use HasFactory;

    /**
     * One-To-Many relationship on addresses -> volunteers.
     * We need One-To-Many because multiple volunteers could
     * live on te same address.
     *
     * @return BelongsToMany
     */
    public function volunteers(): BelongsToMany
    {
        return $this->belongsToMany(Volunteer::class);
    }
}
