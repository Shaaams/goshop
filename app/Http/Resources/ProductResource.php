<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'product_id'          =>$this->id,
            'product_name'        =>$this->title,
            'product_description' =>$this->description,
            'product_unit'        =>$this->unit,
            'product_price'       =>$this->price,
            'product_total'       =>$this->total,
            'product_discount'    =>$this->discount,
            'product_category'    =>$this->category,
            'product_tag'         =>new TagResource($this->tags),
        ];
    }
}
