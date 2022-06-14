<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Carbon\Carbon as DateTime;


/**
 * Class Poll
 * This is the model class for the table "Polls"
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $table
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Poll extends AbstractModel
{
    use HasFactory;

    /**
     * Relationship for polls -> user.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * One-To-Many relationship for poll -> options.
     *
     * @return HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }



}
