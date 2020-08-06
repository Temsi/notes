<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
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
    protected $table = 'tags';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tag','created_at','updated_at'];

    public function notes()
    {
        return $this->belongsToMany('App\Models\Note', 'note_tag', 'tag_id', 'note_id');
    }

}
