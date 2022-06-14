<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 * Class Option
 * This is the model class for the table "options"
 *
 * @property integer $id
 * @property string $vote
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Option extends AbstractModel
{
    use HasFactory;

    /**
     * Relationship for options on poll.
     *
     * @return BelongsTo
     */
    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class);
    }



}
