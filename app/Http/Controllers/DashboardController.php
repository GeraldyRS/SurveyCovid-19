<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Project;
use Auth;
use App\maklonProject;
use \App\Maklon;
use DB;
use \App\File;
use \App\MaklonPkp;
use Carbon;
use Session;
use Mail;
use App\Mail\ResetPkp;
use App\Notifications\NotifyReset;
class DashboardController extends Controller
{
    public function index(Request $request)
    {

        return view('dashboards.index');
    }

    public function detail(Request $request)
    {
        $subject = \App\subject::create([
            'name' => $request->name,
            'email'=> $request->email,
        ]);
            return view('dashboards.detail',compact('subject'));
    }
    public function tabular(Request $request, $id)
    {
        $question = \App\question::create([
            'survey_id' => $id,
            'q1' => $request->q1,
            'q2'=> $request->q2,
            'q3'=> $request->q3,
            'q4'=> $request->q4,
            'q5'=> $request->q5,
            'q6'=> $request->q6,
            'q7'=> $request->q7,
            'q8'=> $request->q8,
            'q9'=> $request->q9,
            'q10'=> $request->q10,
            'q11'=> $request->q11,
            'q12'=> $request->q12,
            'q13'=> $request->q13,
            'q14'=> $request->q14,
            'q15'=> $request->q15,
            'q16'=> $request->q16,
            'q17'=> $request->q17,
            'q18'=> $request->q18,
            'q19'=> $request->q19,
            'q20'=> $request->q20,
            'q21'=> $request->q21,
        ]);
        $question = DB::select("SELECT * FROM question
            JOIN subject ON question.survey_id = subject.id
            WHERE survey_id = $id GROUP BY question.survey_id");
        $sum = DB::select("SELECT q1+q2+q3+q4+q5+q6+q7+q8+q9+q10+q11+q12+q13+q14+q15+q16+q17+q18+q19+q20+q21 AS sum FROM `question` WHERE survey_id = $id GROUP BY survey_id");

            return view('dashboards.tabular',compact('question','sum'));
    }
}
