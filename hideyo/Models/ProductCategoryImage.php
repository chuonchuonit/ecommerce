<?php 

namespace Hideyo\Models;

use Hideyo\Models\BaseModel;

class ProductCategoryImage extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */    
    protected $table = 'product_category_image';

    protected $guarded =  array('file');

    // Add the 'avatar' attachment to the fillable array so that it's mass-assignable on this model.
    protected $fillable = ['product_category_id', 'file', 'extension', 'size', 'path', 'rank', 'tag', 'modified_by_user_id',];
}