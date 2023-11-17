<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    
    protected $table = 'tbvenda';
    protected $fillable = ['idVenda','idProduto','qtdProduto'];
    public $timestamps = false;
}
