<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Table associated with the table.
     *
     * @var string
     */
    protected $table = 'questions';

    //-------------------------------------------------------------------------
    
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo('App\Models\QuestionType', 'question_type_id');
    }
}
