<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CalendarResource extends JsonResource
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
            'start' => $this->date_start,
            'end' => Carbon::parse($this->date_end)->addDays(1),
            'title' => $this->title,
            'color' => $this->color,
        ];
    }
}
