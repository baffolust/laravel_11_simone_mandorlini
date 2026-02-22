<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|unique:App\Models\Receipt,title',
            'type' => 'required|min:5',
            'short_description' => 'required|min:10|max:300',
            'description' => 'required|min:50'
            
        ];  
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo della ricetta è obbligatorio',
            'title.min' => 'Il titolo della ricetta deve essere lungo almeno :min caratteri',
            'title.unique' => 'Ricetta già presente',
            'type.required' => 'Il tipo di ricetta è obbligatorio',
            'type.min' => 'Il tipo di ricetta deve essere lungo almeno :min caratteri',
            'description.required' => 'Inserisci la ricetta',
            'description.min' => 'La descrizione della ricetta deve essere lunga almeno :min caratteri',
            'short_description.required' => 'Inserisci una descrizione del piatto',
            'short_description.min' => 'La descrizione del piatto deve essere lunga almeno :min caratteri',
            'short_description.max' => 'La descrizione del piatto deve essere lunga al massimo :max caratteri'
        ];
    }
}
