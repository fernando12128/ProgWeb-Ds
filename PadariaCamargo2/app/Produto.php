<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tbproduto';
    protected $fillable = ['id','produto','descrProduto','valor','dtCadastro','foto'];
    public $timestamps = false;
}
