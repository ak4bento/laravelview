<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class inventory
 * @package App\Models
 * @version December 20, 2019, 10:37 pm UTC
 *
 * @property string name
 * @property string type
 * @property string category
 * @property string company
 * @property string date_of_entry
 * @property string warranty
 * @property string image
 * @property integer qty
 */
class inventory extends Model
{
    use SoftDeletes;

    public $table = 'inventory';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'type',
        'category',
        'company',
        'date_of_entry',
        'start_warranty',
        'end_warranty',
        'image',
        'qty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'type' => 'string',
        'category' => 'string',
        'company' => 'string',
        'date_of_entry' => 'date',
        'start_warranty' => 'date',
        'end_warranty' => 'date',
        'image' => 'string',
        'qty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];
}
