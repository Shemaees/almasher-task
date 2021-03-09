<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Course extends Model implements JWTSubject
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'name', 'category_id', 'description', 'rating', 'views', 'levels', 'hours', 'active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=[
        'deleted_at'=>'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getRating()
    {
        if ($this->rating == 5)
            return 'width:100%;';
        elseif ($this->rating == 4)
            return 'width:75%;';
        elseif ($this->rating == 3)
            return 'width:58%;';
        elseif ($this->rating == 2)
            return 'width:35%;';
        else
            return 'width:16%;';
    }

}
