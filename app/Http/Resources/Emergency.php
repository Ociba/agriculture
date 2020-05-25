<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Emergency extends JsonResource
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
            'product_name' => $this->products->product,
            'officers_role' => $this->roles->role,
            'district_name' => $this->districts->district,
            'county_name' => $this->counties->county,
            'village_name' => $this->villages->village,
            'signs_symptom' => $this->signs_symptoms->signs_symptoms,
            'users_contact' => $this->users->contact
        ];
    }
}
