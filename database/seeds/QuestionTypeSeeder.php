<?php

use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
	    		     ['type'=>'textbox'],
	    		     ['type'=>'label'],
	    		     ['type'=>'radio'],
	    		     ['type'=>'date'],
	    		     ['type'=>'dropdown'],
	    		     ['type'=>'email'],
	    		     ['type'=>'textarea']
                   ];
       foreach ($data as $key => $value) {
       	   DB::table('question_type')->insert([
                        'type' => $value['type'],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
				    ]);
       }
    }
}
