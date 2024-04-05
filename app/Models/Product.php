<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\EnableScope;

/**
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property boolean $active
 * @property Sale[] $sales
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'active'];
    protected static function booted()
    {
        static::addGlobalScope(new EnableScope);
    }
}
