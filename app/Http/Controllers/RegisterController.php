<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\EmAppeal;
use App\Repositories\AppealRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = EmAppeal::whereNotIn('appeal_status', ['DRAFT'])->orderby('id', 'desc');
        if(globalUserInfo()->role_id == 37)
        {
            $results =$results->where('district_id',user_district());
        }
        if(globalUserInfo()->role_id == 7)
        {
            $results =$results->where('district_id', user_district())->where('assigned_adc_id', globalUserInfo()->id);
        }
        if(globalUserInfo()->role_id == 38 || globalUserInfo()->role_id == 39)
        {
            $results =$results->where('district_id',user_district())->where('court_id',globalUserInfo()->court_id);
        }
        if(globalUserInfo()->role_id == 27 || globalUserInfo()->role_id == 28)
        {
            $results =$results->where('district_id',user_district())->where('court_id',globalUserInfo()->court_id);
        }
        if(!empty($_GET['date_start'])  && !empty($_GET['date_end'])){
            // dd(1);
            $dateFrom = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['date_start'])));
            $dateTo =  date('Y-m-d', strtotime(str_replace('/', '-', $_GET['date_end'])));
            $results  = $results->whereBetween('case_date', [$dateFrom, $dateTo]);
        }
        if(!empty($_GET['case_no'])) {
            $results = $results->where('case_no','=',$_GET['case_no']);
        }
        if(!empty($_GET['caseStatus'])) {
            if($_GET['caseStatus']=='ON_TRIAL')
            {
                $caseStatus_array=['ON_TRIAL','ON_TRIAL_DM'];
            }
            elseif($_GET['caseStatus']=='CLOSED')
            {
                $caseStatus_array=['CLOSED'];
            }
            $results = $results->whereIN('appeal_status',$caseStatus_array);
        }
        $results=$results->paginate(30);
        // return $results;
        $date=date($request->date);
        $caseStatus = 1;
        // $userRole=Session::get('userRole');
        $userRole=Auth::user()->role_id;
       
        $page_title  = 'রেজিস্টার ';
        //return view('appealList.appeallist')->with('date',$date);
        return view('register.index', compact('date','caseStatus', 'page_title', 'results'));
    }

    public function registerPrint(Request $request)
    {
        $req = $request->all();
        $results = EmAppeal::whereNotIn('appeal_status', ['DRAFT'])->orderby('id', 'desc');
        if(globalUserInfo()->role_id == 37)
        {
            $results =$results->where('district_id',user_district());
        }
        if(globalUserInfo()->role_id == 7)
        {
            $results =$results->where('district_id', user_district())->where('assigned_adc_id', globalUserInfo()->id);
        }
        if(globalUserInfo()->role_id == 38 || globalUserInfo()->role_id == 39)
        {
            $results =$results->where('district_id',user_district())->where('court_id',globalUserInfo()->court_id);
        }
        if(globalUserInfo()->role_id == 27 || globalUserInfo()->role_id == 28)
        {
            $results =$results->where('district_id',user_district())->where('court_id',globalUserInfo()->court_id);
        }
        if(!empty($_GET['date_start'])  && !empty($_GET['date_end'])){
            // dd(1);
            $dateFrom = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['date_start'])));
            $dateTo =  date('Y-m-d', strtotime(str_replace('/', '-', $_GET['date_end'])));
            $results  = $results->whereBetween('case_date', [$dateFrom, $dateTo]);
        }
        if(!empty($_GET['case_no'])) {
            $results = $results->where('case_no','=',$_GET['case_no']);
        }
        if(!empty($_GET['caseStatus'])) {
            if($_GET['caseStatus']='ON_TRIAL')
            {
                $caseStatus_array=['ON_TRIAL','ON_TRIAL_DM'];
            }
            else
            {
                $caseStatus_array=['CLOSED'];
            }
            $results = $results->whereIN('appeal_status',$caseStatus_array);
        }
        $results=$results->get();
        // return $results;
        $date=date($request->date);
        $caseStatus = 1;
        // $userRole=Session::get('userRole');
        $userRole=Auth::user()->role_id;
        $gcoUserName='';
        if($userRole=='GCO'){
            // $gcoUserName=Session::get('userInfo')->username;
            $gcoUserName=Auth::user()->username;
        }
        $page_title  = 'রেজিস্টার ';
        //return view('appealList.appeallist')->with('date',$date);
        return view('register.printView', compact('date','gcoUserName','caseStatus', 'page_title', 'req', 'results'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
