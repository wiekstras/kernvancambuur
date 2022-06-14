<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Member
 * This is the model class for the table "members"
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property Date $date_of_birth
 * @property string $email
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Volunteer extends AbstractModel
{
    use HasFactory;

    /**
     * Relationship for volunteer on address.
     *
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
