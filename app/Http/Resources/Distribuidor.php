<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Distribuidor extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            '_id' => $this->_id,
            'login' => $this->login,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
