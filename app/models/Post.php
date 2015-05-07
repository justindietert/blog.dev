<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
        'title' => 'required|max:100',
        'body'  => 'required|max:10000'
    );

    /**
     * Format slug from title and make it unique if it already exists in DB.
     */
    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);

        $slugCount = count( $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'")->get() );

        $slugFinal = ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;

        $this->attributes['slug'] = $slugFinal;
    }

    /**
     * Link to User model.
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
