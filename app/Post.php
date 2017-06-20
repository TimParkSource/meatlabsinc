<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = [
        'user_id', 'post',
    ];

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each post has many comments
    public function comments() {
        return $this->hasMany('Comment');
    }

    // each comment has one user
    public function users() {
        return $this->hasOne('User');
    }

}