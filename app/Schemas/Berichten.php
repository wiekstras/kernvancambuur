<?php

namespace App\Schemas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Berichten
 *
 * @OA\Schema(
 *     title="Berichten",
 *     description="Berichten schema",
 * )
 */
class Berichten extends BaseResource
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
     *     property="name",
     *     type="string",
     *     description="name of customer",
     *     title="Name",
     * )
     * @OA\Property(
     *     property="email",
     *     type="string",
     *     description="Email of customer",
     *     title="Email",
     * )
     *     @OA\Property(
     *     property="phone",
     *     type="int",
     *     description="Phonenumber of customer",
     *     title="Phone",
     * )
     *     @OA\Property(
     *     property="subject",
     *     type="string",
     *     description="Subject of the message",
     *     title="Subject",
     * )
     *     @OA\Property(
     *     property="message",
     *     type="string",
     *     description="The message",
     *     title="Message",
     * )
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'phone'           => $this->phone,
            'subject'         => $this->subject,
            'message'         => $this->message
        ];
    }
}
