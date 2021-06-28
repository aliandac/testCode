<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey\SurveyScore;
use Illuminate\Support\Facades\DB;

class CompanySurveyRecordController extends Controller
{
    public function index()
    {
        $companies = SurveyScore::groupBy('company_id')->with('company')->paginate(15);

        return view('admin.company.survey.index', compact('companies'));
    }

    public function detail($id)
    {
        $survey = SurveyScore::where('company_id', $id)->with('company')->paginate(15);

        return view('admin.company.survey.detail', compact('survey'));
    }
}
