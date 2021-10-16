<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $A = array("1", "2", "3", "0");
        return [
            'eventName' => 'required|min:20',
            'bandNames' =>'required',
            'startDate' =>'date|after:today',
            'endDate' =>'date|after:startDate',
            'ticketPrice' =>'min:1',
            'status' =>'in_array:$A'
        ];
    }
}
