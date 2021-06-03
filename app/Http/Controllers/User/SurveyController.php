<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use DB;
use Auth;

class SurveyController extends Controller
{
    protected $perPage;
    /**
     * Constructor
     * 
     */
    public function __construct()
    {
       $this->perPage = 5; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user){
           $answers = DB::table('survey_question_answer as sqa')
              ->join('users as u','sqa.user_id','=','u.id')
              ->join('survey as s','sqa.survey_id','=','s.id')
              ->join('questions as q','sqa.question_id','=','q.id')
              ->where('sqa.user_id','=',$user->id)
              ->select('s.description','sqa.id as id','q.title','sqa.answer')
              ->paginate($this->perPage);
          
             return view('user.survey1.answers', compact('answers')); 
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {  
        $survey = Survey::pluck('description','id');
        return view('user.survey1.question',compact('survey'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth:: user();
        $status = false;
        if($user){
           $sid = $request->sid;
           $data = $request->except('sid','_token');
           
           foreach ($data as $key => $answer) {
                DB::table('survey_question_answer')
                   ->insert(['user_id'=>$user->id,
                             'survey_id'=>$sid,
                             'question_id'=>$key,
                             'answer'=>$answer,
                          ]);

            } 
            $status = true;
        }
       
       return response()->json(['success'=>$status,'data'=>[]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //-------------------------------------------------------------------------

    public function getQuestionById(Request $request, $id)
    {
        $data = DB::table('survey_questions as sq')
              ->join('questions as q','sq.question_id','=','q.id')
              ->join('question_type as qt','q.question_type_id','=','qt.id')
              ->where('sq.survey_id','=',$id)
              ->select('sq.survey_id','q.id as qid','q.title as label','q.name','qt.type','q.isValidate','q.validation')
              ->paginate($this->perPage);
             
        return response()->json(['success'=>true,'data'=>$data]);
    }
}
