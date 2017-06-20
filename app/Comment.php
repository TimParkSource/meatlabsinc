<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = [
        'user_id', 'post_id', 'comment',
    ];

    // DEFINE RELATIONSHIPS --------------------------------------------------
    /// each comment has one post
    public function posts() {
        return $this->hasOne('Post'); // this matches the Eloquent model
    }

    // each comment has one user
    public function users() {
        return $this->hasOne('User');
    }

}