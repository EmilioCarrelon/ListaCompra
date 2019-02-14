<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function scopeporCategoria($query, $type)
    {
        info('En scope');
        return $query->where('categoria', $type);
    }
    public static function TodaCategoria(){
            $categoria = self::select('categoria')->distinct()->get();
            return $categoria;
    }
}
