<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\OcorrenciaRequest;

class Ocorrencia extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function tipos(){
        return [
            'Saída',
            'Entrada',
            'Registro'
        ];
    }
}
