<?php

namespace App\Http\Resources;

use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            "date_of_event"=>$this->date_of_event,
            "time"=> $this->time,
            "venue"=>$this->venue,
            "organiser"=>$this->organiser,
            'rating'=>$this->reviews->count()>0? round($this->reviews->sum('star')/$this->reviews->count(),2): "no rating yet",
            'review'=>route('reviews.index', $this->id)


        ];
    }


}
