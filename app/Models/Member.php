<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Carbon\Traits\Date;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

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
class Member extends AbstractModel
{
    use HasFactory;

    /**
     * One-To-One relationship on member -> billing info.
     *
     * @return HasOne
     */
    public function billingInfo(): HasOne
    {
        return $this->hasOne(BillingInfo::class);
    }

    /**
     * Inserts a new member.
     * @param $values
     * @return int
     */
    public function insertMember($values): int
    {
        return DB::table('members')->insertGetId($values);
    }
}
