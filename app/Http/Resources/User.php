<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'user'       => $this->user,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
