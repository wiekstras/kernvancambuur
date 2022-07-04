<?php

namespace App\Models;

use Carbon\Carbon as DateTime;

/**
 * Class
 * This is the model class for the table "news"
 *
 * @property integer $id
 * @property string  $news_image_path
 * @property string  $news_text
 * @property string  $news_text_stripped
 * @property string  $news_title
 *
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class NieuwsBerichten extends AbstractModel
{
    public function getBlogTextStrippedAttribute()
    {
        // First shrink blog-text 1024 to avoid we need to strip too much, after stripping get the first 256 chars
        return substr(
            strip_tags(substr($this->news_text, 0, 1024)),
            0,
            256
        );
    }

    protected $table = 'news';
    protected $fillable = ['news_text', 'news_title', 'news_image_path'];
}
