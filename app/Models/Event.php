<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

/**
 * Class Event
 * This is the model class for the table "events"
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $image_url
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Event extends AbstractModel
{
    use HasFactory;

    protected $casts = [
    'created_at' => 'date:d-m-Y',
    'updated_at' => 'date:d-m-Y',
    ];

    /**
     *
     * Relationship for events -> user.
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function insertEvent($values)
    {
        return DB::table('events')->insert($values);
    }

}
