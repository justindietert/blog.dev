<?php

class Work extends BaseModel
{
    protected $table = 'work';

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

}
