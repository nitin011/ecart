<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

/**
 * @method static find($cat_id)
 * @method static create(array $array)
 */
class Category extends Model
{
    use NestableTrait;
    use HasRecursiveRelationships;

    const IMG_PATH = "app/public/categories/";
    const IMG_URL = "storage/categories/";

    protected $table = 'categories';

    protected $primaryKey = 'cat_id';
    protected $parent = 'parent';

    protected $fillable = ['cat_id', 'title', 'slug', 'image', 'parent', 'level', 'description', 'status'];
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return assetUrl($this->image);
    }

    public $timestamps = false;

    public function getParentKeyName()
    {
        return 'parent';
    }

    public function getLocalKeyName()
    {
        return 'cat_id';
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id', 'cat_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent', 'cat_id');
    }
}
