<?php

namespace App\Schemas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * NieuwsBerichtenCondensed
 *
 * @OA\Schema(
 *     title="NieuwsBerichtenCondensed",
 *     description="News model",
 * )
 */
class NieuwsBerichtenCondensed extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @OA\Property(
     *     property="id",
     *     type="integer",
     *     description="ID",
     *     title="ID",
     *     readOnly=true
     * )
     * @OA\Property(
     *     property="news_image_path",
     *     type="string",
     *     description="Path to the image on the server",
     *     title="Image path",
     *     readOnly=true
     * )
     * * @OA\Property(
     *     property="news_title",
     *     type="string",
     *     description="News title",
     *     title="News title",
     * )
     * @OA\Property(
     *     property="news_text_stripped",
     *     type="string",
     *     description="Smaller news-text variant, with HTML tags removed",
     *     title="News text",
     * )
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'                 => $this->id,
            'news_title'         => $this->news_title,
            'news_image_path'    => ! empty($this->news_image_path) ? Storage::disk('public')->url($this->news_image_path) : '',
            'news_text_stripped' => $this->news_text,
            'publish_date'       => $this->created_at,
        ];
    }
}
