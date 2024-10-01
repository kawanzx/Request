<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DadosRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'nome' => 'required|string',
        'email' => 'required|email',
        'telefone' => 'required|string',
        'data_nascimento' => 'required|date',
        'endereco' => 'required|string',
        'idade' => 'required|integer',
        'altura' => 'required|numeric',
        ];
    }
    
    public function messages()
    {
        return [
        'nome.required' => 'O nome é obrigatório.',
        'email.required' => 'O e-mail é obrigatório.',
        'telefone.required' => 'O telefone é obrigatório.',
        'data_nascimento.required' => 'A data de nascimento é obrigatória.',
        'endereco.required' => 'O endereço é obrigatório.',
        'idade.required' => 'A idade é obrigatória.',
        'altura.required' => 'A altura é obrigatória.',
        'email.email' => 'O e-mail não é válido.',
        'data_nascimento.date' => 'A data de nascimento não é válida.',
        'idade.integer' => 'A idade deve ser um número inteiro.',
        'altura.numeric' => 'A altura deve ser um número.'
        ];
        
    }
}
