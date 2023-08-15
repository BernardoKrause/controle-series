<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    protected $with = ['temporadas'];

    public function temporadas() {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted() 
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome');
        });
    }
    /*outro escopo de exibição exemplo seria o de usuarios ativos: 
    public function scopeActive(Builder $query) 
    {
        return $query->where('active', true);
    }*/
}
