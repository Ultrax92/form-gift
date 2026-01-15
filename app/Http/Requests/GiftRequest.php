<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiftRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string|min:3|max:50',
            'url'     => 'nullable|url:http,https',
            'details' => 'nullable|string',
            'price'   => 'required|numeric|min:0|decimal:0,2',
        ];
    }

    /**
     * Messages d'erreur personnalisés
     */
    public function messages(): array
    {
        return [
            'name.required'    => 'Le nom du cadeau est obligatoire.',
            'name.min'         => 'Le nom doit contenir au moins 3 caractères.',
            'name.max'         => 'Le nom ne peut pas dépasser 50 caractères.',
            'url.url'          => 'L\'URL doit être valide et commencer par http ou https.',
            'price.required'   => 'Le prix est obligatoire.',
            'price.numeric'    => 'Le prix doit être un nombre.',
            'price.min'        => 'Le prix ne peut pas être négatif.',
            'price.decimal'    => 'Le prix ne doit pas avoir plus de 2 chiffres après la virgule.',
        ];
    }
}
