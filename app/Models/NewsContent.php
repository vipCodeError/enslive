<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsContent extends Model
{
    use HasFactory;
    protected $table = "news_content";

    protected $fillable = ['news_title', 'slug', 'edition', 'edition_slug'];

//
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }


    /**
     * Boot the model.
     */

    protected static function boot()
    {
        parent::boot();

        static::created(function ($newscontent) {
            if($newscontent->news_title != ""){
                DB::update("UPDATE news_content SET slug = REPLACE(TRIM(:news_title) ,' ', '-') where id=:news_id",
                    ['news_title' => $newscontent->news_title, 'news_id' => $newscontent->id]);
                $newscontent->edition_slug = $newscontent->createSlug($newscontent->edition);
                $newscontent->save();
            }

        });
    }

    /**
     * Write code on Method
     *
     * @return response|array|string|string[]
     */
    private function createSlug($news_title){
        if (static::whereSlug($slug = Str::slug($news_title))->exists()) {
            $max = static::whereTitle($news_title)->latest('id')->skip(1)->value('slug');

            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}" +$max;
        }

        return $slug;
    }
}
