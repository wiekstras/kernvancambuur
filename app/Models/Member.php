<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
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
}
