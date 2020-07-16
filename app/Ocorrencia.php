<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\OcorrenciaRequest;

class Ocorrencia extends Model
{
    protected $guarded = ['id'];

    public function tipos(){
        return [
            'Saída',
            'Entrada',
            'Registro'
        ];
    }
}
