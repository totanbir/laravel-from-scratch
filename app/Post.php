<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }

    

		public function scopeFilter($query, $filters){

		if (isset($filters['month'])){
		if($month = $filters['month']){
		$query->whereMonth('created_at', Carbon::parse($month)->month);
		}
		}

		if(isset($filters['year'])){
		if($year = $filters['year']){
		$query->whereYear('created_at', $year);
		}
		}
		}

		public static function archives(){
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
		}
        
        public function tags()
        {
            //Any post may have many tags
            //Any tag may be applied to many posts

            return $this->belongsToMany(Tag::class);
        }

}
