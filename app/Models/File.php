<?php

namespace App\Models;

use Carbon\Carbon as DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
/**
 * Class File
 * This is the model class for the table "files"
 *
 * @property integer $id
 * @property string $title
 * @property string $file_url
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class File extends AbstractModel
{
    use HasFactory;

    /**
     * Many-to-Many relationship on headlines -> files.
     *
     * @return BelongsToMany
     */
    public function headlines(): BelongsToMany
    {
        return $this->belongsToMany(Headline::class);
    }



}
