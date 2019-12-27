<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes ;

    /*
     * Created by : Do3a2 Al3abbar
     * Date : 25/12/2019
     * Time : 11:49 AM
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [ 'id',
                            'title',
                            'content',
                            'image',
                            'slug',
                        ];
    /*
     * Show images from backEnd
     * Created by : Do3a2 Al3abbar
     * Date : 25/12/2019
     * Time : 11:47 AM
    */

    public function getFeaturedAttribute($image){

        return asset($image);
    }

    /*
     * relation between post and category
     * relation one to many
     * Created By : Do3a2 Al3abbar
     * Date : 25/12/2019 12:06 AM
     */
    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    /*
     * relation between posts and tags
     * relation many to many
	 * Created By : Do3a2 Al3abbar
	 * Date : 25/12/2019 12:05 AM
     */
    public  function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
