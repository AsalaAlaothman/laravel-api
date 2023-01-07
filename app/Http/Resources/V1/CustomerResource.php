<?php

namespace App\Http\Resources\V1;

use App\Models\Invoice;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'type' => $this->type ,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')) //relation
            //api/v1/customers?includeInvoices=true to call relation
        ];
    }
}
