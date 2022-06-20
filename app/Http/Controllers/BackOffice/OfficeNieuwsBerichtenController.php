<?php

namespace App\Http\Controllers\BackOffice;

use Illuminate\Http\Request;

Use App\Http\Controllers\BaseController;
use App\Schemas\NieuwsBerichten AS NieuwsBerichtenResource;
use App\Schemas\NieuwsBerichtenCondensed AS NieuwsBerichtenCondensedResource;
Use App\Models\NieuwsBerichten;

/**
 * OfficeNieController
 */
class OfficeNieuwsBerichtenController extends BaseController
{
    /**
     * @OA\Get(
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news",
     *   summary="Get news",
     *   description="Return condensed news information",
     *
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       type="array",
     *       @OA\Items(ref="#/components/schemas/nieuwsBerichtenCondensed")
     *     ),
     *   ),
     * )
     */
    public function index(Request $request)
    {
        $user = $request->user();
        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');

        return NieuwsBerichtenCondensedResource::collection(NieuwsBerichten::get());
    }

    /**
     * @OA\Get (
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news/{id}",
     *   summary="Get Blog by ID",
     *
     *   @OA\Parameter(
     *     name="id", in="path",required=true, @OA\Schema(type="integer"),
     *     description="ID of the news to get",
     *   ),
     *
     *   @OA\Response(response="200", description="OK", @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),),
     * )
     */
    public function getByID(Request $request, int $id)
    {
        $user = $request->user();
        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');

        // get model
        $model = NieuwsBerichten::where([
            'id' => $id,
        ])->firstOrFail();

        return new NieuwsBerichtenResource($model);
    }

    /**
     * @OA\Post (
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news",
     *   summary="Create news",
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),
     *  ),
     *
     *   @OA\Response(response="201", description="OK", @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),),
     * )
     */
    public function create(Request $request)
    {
        $user = $request->user();
        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');

        // Validate data
        $data = $request->validate(NieuwsBerichtenResource::rules());

        // Create News Blog obj
        $model = NieuwsBerichten::create(array_merge($data, [
            'news_image_path' => '',
        ]));

        // Return created News object
        // TODO return 201?
        $model->refresh();
        return new NieuwsBerichtenResource($model);
    }

    /**
     * @OA\Post (
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news/{id}",
     *   summary="Update News by ID",
     *
     *   @OA\Parameter(
     *     name="id", in="path",required=true, @OA\Schema(type="integer"),
     *     description="ID of the news to update",
     *   ),
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),
     *  ),
     *
     *   @OA\Response(response="200", description="OK", @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),),
     * )
     */
    public function update(Request $request, int $id)
    {
        $user = $request->user();
        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');


        // Get requested News Blog obj
        $model = NieuwsBerichten::where([
            'id' => $id,
        ])->firstOrFail();

        // Validate data
        $data = $request->validate(NieuwsBerichtenResource::rules());

        // Update the model with it
        $model->fill($data);
        $model->save();

        // Return updated News object
        $model->refresh();
        return new NieuwsBerichtenResource($model);
    }

    /**
     * @OA\Delete (
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news/{id}",
     *   summary="Delete news  by ID",
     *
     *   @OA\Parameter(
     *     name="id", in="path",required=true, @OA\Schema(type="integer"),
     *     description="ID of the news to delete",
     *   ),
     *
     *   @OA\Response(response="204", description="OK"),
     * )
     */
    public function delete(Request $request, int $id)
    {
        $user = $request->user();

        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');

        // Get requested News obj
        $model = NieuwsBerichten::where([
            'id'     => $id,
        ])->firstOrFail();
        $model->delete();

        // Return nothing
        return null;
    }

    /**
     * @OA\Post (
     *   tags={"officeNieuwsBerichten"},
     *   operationId="getOfficeNieuwsBerichten",
     *   security={{"bearerAuth":{}}},
     *   path="/office/news/{id}/upload",
     *   summary="Upload a new Image for the given news",
     *
     *   @OA\RequestBody(
     *       required=true,
     *       @OA\MediaType(
     *           mediaType="multipart/form-data",
     *           @OA\Schema(
     *               @OA\Property(
     *                   description="Image to upload; only jpg and png allowed. Max size 10mb. min 500x500, max 6000x6000",
     *                   property="file",
     *                   type="string",
     *                   format="binary",
     *               ),
     *               required={"image"}
     *           ),
     *       ),
     *   ),
     *   @OA\Parameter(
     *     name="id", in="path",required=true, @OA\Schema(type="integer"),
     *     description="ID of the news to upload the Image to",
     *   ),
     *
     *   @OA\Response(response="201", description="OK", @OA\JsonContent(ref="#/components/schemas/NieuwsBerichten"),),
     * )
     */
    public function upload(Request $request, int $id)
    {
        $user = $request->user();
        //Todo fix login check
        //abort_if(! $user->, 403, 'User is not logged in');

        // Get requested News obj
        $model = NieuwsBerichten::where([
            'id'     => $id,
        ])->firstOrFail();

        // Validate upload
        $request->validate([
            'file' => 'required|image:jpeg,jpg,png|max:10240|dimensions:min_width=500,min_height=280,max_width=6000,max_height=6000',
        ]);

        // Store image to folder
        $folder = "back-office/news";
        $image  = $request->file('file');
        $path   = $image->store($folder, 'public');

        // Save image-path
        // TODO remove any existing images
        $model->news_image_path = $path;
        $model->save();

        $model->refresh();
        return new NieuwsBerichtenResource($model);
    }
}
