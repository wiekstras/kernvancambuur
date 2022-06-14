<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Headline
 * This is the model class for the table "headlines"
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $image_url
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Headline extends AbstractModel
{
    use HasFactory;

    /**
     * Many-to-Many relationship on headlines -> files.
     *
     * @return BelongsToMany
     */
    public function files(): BelongsToMany
    {
        return $this->belongsToMany(File::class);
    }


}
