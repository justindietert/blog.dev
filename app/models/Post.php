<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
        'title' => 'required|max:100',
        'body'  => 'required|max:10000'
    );

    /**
     * Format slug from title.
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Link to User model.
     */
    public function user()
    {
        return $this->belongsTo('User');
    }
}
