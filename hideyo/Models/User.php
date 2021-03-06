<?php 

namespace Hideyo\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function __construct(array $attributes = array())
    {
        $this->table = $this->table;  
        parent::__construct($attributes);
    }
    
    public function getUserProfileData()
    {
        return $this->hasMany('Hideyo\Models\UserProfileData');
    }

    public function shop()
    {
        return $this->belongsTo('Hideyo\Models\Shop', 'selected_shop_id', 'id');
    }
}