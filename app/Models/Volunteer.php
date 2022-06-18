<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

/**
 * Class Member
 * This is the model class for the table "members"
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property Date $date_of_birth
 * @property string $gender
 * @property string $email
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Volunteer extends AbstractModel
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'date_of_birth', 'gender', 'email'];

    /**
     * Relationship for volunteer on address.
     *
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get The address of a volunteer by id.
     *
     * @param $volunteerId
     * @return Address|mixed
     */
    public function getAddress($volunteerId)
    {
        return (new Address)->find($volunteerId);
    }

    /**
     * Inserts a volunteer and returns the primary key.
     * @param $values
     * @return int
     */
    public function insertVolunteer($values): int
    {
        return DB::table('volunteers')->insertGetId($values);
    }
}
