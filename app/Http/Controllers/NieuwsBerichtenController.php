<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schemas\NieuwsBerichten AS NieuwsBerichtenResource;
Use App\Models\NieuwsBerichten;

class NieuwsBerichtenController extends BaseController{
    /**
     * @OA\Get(
     *   tags={"NieuwsBerichtenController"},
     *   operationId="getLatestNews",
     *   path="/news/latest",
     *   summary="Get latest news",
     *   description="Get latest news by created_at time",
     *
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(ref="#/components/schemas/news"),
     *   ),
     * )
     */
    public function latest()
    {
        return new NieuwsBerichtenResource(
            NieuwsBerichten::orderBy('created_at', 'desc')->firstOrFail()
        );
    }

}
