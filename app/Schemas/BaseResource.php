<?php

namespace App\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Extend JsonResource to include a Total-Count as header
 */
class BaseResource extends JsonResource
{
    /**
     * Create a paginated Collection response
     */
    static public function paginatedCollection(Builder $query, int $limit, int $offset)
    {
        // Get total count and get the collection
        $count = $query->count();
        $collection = self::collection($query->limit($limit)->offset($offset)->get());

        // Return collection with Total-Count header
        return $collection->response()->header('X-Total-Count', $count);
    }
}
