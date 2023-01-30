<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EventsRequest extends FormRequest
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
        return [
            'nomeEvento' => 'required',
            'nomeResponsavel' => 'required',
            'area' => 'required',
            'descricao' => 'required',
            'numeroFuncionarios' => 'required|integer|min:1',
            'numeroParticipantes' => 'required|integer|min:1',
            'custo' => 'required|integer|min:1'
        ];
    }


    /**
     * Get the messages array.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nomeEvento.required' => 'O campo Nome do Evento é obrigatório.',
            'nomeResponsavel.required' => 'O campo Nome do(a) Responsavel é obrigatório.',
            'area.required' => 'O campo Área é obrigatório.',
            'descricao.required' => 'O campo Descrição é obrigatório.',
            'numeroFuncionarios.required' => 'O campo Número de Funcionários é obrigatório.',
            'numeroFuncionarios.integer' => 'O campo Número de Funcionários deve ser composto por números.',
            'numeroFuncionarios.min' => 'O campo Número de Funcionários deve ser maior ou igual a 1.',
            'numeroParticipantes.required' => 'O campo Número de Participantes é obrigatório.',
            'numeroParticipantes.integer' => 'O campo Número de Participantes deve ser composto por números. ',
            'numeroParticipantes.min' => 'O campo Número de Participantes deve ser maior ou igual a 1.',
            'custo.required' => 'O campo Custo é obrigatório.',
            'custo.integer' => 'O campo Custo deve ser composto por números.',
            'custo.min' => 'O campo Custo deve ser maior ou igual a 1.'
        ];
    }
}
