<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $int)
 */
class FlagTable extends Model
{
    protected $table = 'flag_table';

    protected $fillable = [
        'id',
        'file_name',
        'imported',
        'rows_imported',
        'total_rows',
        'properties',
        'created_at',
        'updated_at'
    ];
    /**
     * @var string[]
     */
    protected $casts = [
        'properties' => 'array'
    ];

/*    public function setPropertiesAttribute($value)
    {
        $properties = [];

        foreach ($value as $array_item) {
            if (!is_null($array_item['key'])) {
                $properties[] = $array_item;
            }
        }

        $this->attributes['properties'] = json_encode($properties);
    }*/

}
