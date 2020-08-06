<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteTagTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'note_tag';

    /**
     * Run the migrations.
     * @table note_tag
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->primary(['note_id', 'tag_id']);
            $table->unsignedInteger('note_id');
            $table->unsignedInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
