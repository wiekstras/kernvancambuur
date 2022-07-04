<?php

namespace App\Schemas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Nieuwsberichten
 *
 * @OA\Schema(
 *     title="News",
 *     description="News model",
 * )
 */
class NieuwsBerichten extends BaseResource
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
     *     property="news_title",
     *     type="string",
     *     description="News title",
     *     title="News title",
     * )
     * @OA\Property(
     *     property="news_image_path",
     *     type="string",
     *     description="Path to the image on the server",
     *     title="Image path",
     *     readOnly=true
     * )
     * @OA\Property(
     *     property="news_text",
     *     type="string",
     *     description="HTML rich blog text",
     *     title="News text",
     * )
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'              => $this->id,
            'news_title'      => $this->news_title,
            'news_image_path' => ! empty($this->news_image_path) ? Storage::disk('public')->url($this->news_image_path) : '',
            'news_text'       => $this->news_text,
            'publish_date'       => $this->created_at,

        ];
    }

    static public function rules()
    {
        return [
            'news_text' => ['required', 'string', 'max:4294967294'],
        ];
    }
}
