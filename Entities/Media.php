<?php

namespace Modules\Media\Entities;

use Modules\Page\Entities\Page;
use Modules\Blog\Entities\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $casts = [
        'responsive_images' => 'object',
    ];

    protected $appends = [
        'url',
    ];

    protected static function newFactory()
    {
        return \Modules\Media\Database\factories\MediaFactory::new ();
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function blogs()
    {
        return $this->morphedByMany(Blog::class, 'mediable');
    }

    public function pages()
    {
        return $this->morphedByMany(Page::class, 'mediable');
    }

    // TODO: add this in when I have done the user module
    // public function users()
    // {
    //     return $this->morphedByMany(User::class, 'mediable');
    // }

    public function folder()
    {
        return $this->belongsTo(MediaFolder::class);
    }

    public function getUrlAttribute()
    {
        return 'http://bakend-api.test/' . $this->file_name . '.' . $this->mime_type;
    }
}
