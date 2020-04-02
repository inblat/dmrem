<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Page
 * @package App
 * @property string $slug
 * @property string $page_title
 * @property string $seo_text
 */
class Page extends Model
{
    use Sluggable;

//    protected $table = 'pages';

    protected $fillable = [
        'name',
        'slug',
        'images',
        'intro_text',
        'title',
        'page_title',
        'keywords',
        'description',
        'seo_text',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public static function getOneBySlug($slug){
        return Page::where('slug', $slug)->firstOrFail();
    }

    public function getImagesAttribute($value)
    {
        $result = explode(',', $value);
        array_pop($result);
        return $result;
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = array_reduce($value, function($cary, $item){return $cary .= $item . ',';}, '');
    }


}
