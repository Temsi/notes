<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The primary key used for this table
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'notes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','description','created_at','updated_at'];

    public function tags()
    {
        return $this->belongstoMany('App\Models\Tag', 'note_tag', 'note_id', 'tag_id');
    }
}
