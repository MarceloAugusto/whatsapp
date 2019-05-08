<?php
declare(strict_types=1);

namespace CodeShopping\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    protected $fillable = ['name', 'description', 'price', 'active'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    //belongsToMany - pertence a muitas categorias
    public function Categories()
    {
        return $this->belongsToMany(Category::class);

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
