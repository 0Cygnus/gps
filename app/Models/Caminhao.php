<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caminhao extends Model
{
    protected $table = 'caminhoes'; // Define o nome da tabela, se for diferente do padrão.

    protected $fillable = [
        'nome_caminhao',
        'chassi',
        'placa',
        'ano_caminhao',
        'status',
    ];

    /*public function gps()
    {
        return $this->hasMany(GPS::class, 'id_caminhao', 'id_caminhao');
    }*/

    // Outras definições de campos e relações, se aplicável
}
