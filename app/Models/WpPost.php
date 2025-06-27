<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WpPost extends Model
{
    protected $table = 'wp_posts'; // explicitly map to WP table
    public $timestamps = false;
    protected $primaryKey = 'ID';

    //  Scoped query method
    public function scopePublishedPosts($query)
    {
        return $query->where('post_type', 'post')
                     ->where('post_status', 'publish');
    }
}
