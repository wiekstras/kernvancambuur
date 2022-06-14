<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Address
 * This is the model class for the table "address"
 *
 * @property integer $id
 * @property integer $member_id
 * @property integer $volunteer_id
 * @property string $address
 * @property string $postal_code
 * @property string $residence
 * @property string $phone
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Address extends AbstractModel
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

    protected $table = 'addresses';

}
