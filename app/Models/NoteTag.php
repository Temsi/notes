<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteTag extends Model
{
    /**
     * disable timestamps
     */
    public $timestamps = false;

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
    protected $table = 'note_tag';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['note_id','tag_id'];
}
