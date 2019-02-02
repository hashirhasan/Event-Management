<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class EventCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [
            "id"=>$this->id,
            "user_id"=>$this->user_id,
            "title"=> $this->title,
            "image"=>$this->image,
            "description"=>$this->description,
            "time"=> $this->time,
            "venue"=>$this->venue,
            "organiser"=>$this->organiser

        ];
         
    }
}