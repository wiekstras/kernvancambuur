<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

/**
 * Class Billing info
 * This is the model class for the table "billing_infos"
 *
 * @property integer $id
 * @property integer $member_id
 * @property double $amount
 * @property string $account_number
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class BillingInfo extends AbstractModel
{
    use HasFactory;
    protected $table = 'billing_infos';
    /**
     * Relationship for billingInfo -> user
     *
     * @return BelongsTo
     */
    public function member(): BelongsTo
    {
        return $this->BelongsTo(Member::class);
    }

    /**
     * Inserts payment information of new member.
     *
     * @param $values
     * @return bool
     */
    public function insertBillingInfo($values): bool
    {
        return DB::table('billing_infos')->insert($values);
    }
}
