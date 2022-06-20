<?php

namespace App\Models;

use Carbon\Carbon as DateTime;

/**
 * Class PromolotBlog
 * This is the model class for the table "promolot_blog"
 *
 * @property integer $id
 * @property string  $news_image_path
 * @property string  $news_text
 * @property string  $news_text_stripped
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
            strip_tags(substr($this->blog_text, 0, 1024)),
            0,
            256
        );
    }

    protected $table = 'news';

}
