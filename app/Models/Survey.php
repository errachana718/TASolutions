<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
   /**
     * Table associated with the table.
     *
     * @var string
     */
    protected $table = 'survey';

    //-------------------------------------------------------------------------
    
    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function questions()
    {
    	return $this->belongsToMany('App\Models\Question','survey_questions');
    }
}
