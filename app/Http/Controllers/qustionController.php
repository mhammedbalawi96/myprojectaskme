<?php

namespace App\Http\Controllers;

use App\Answer;

use App\Catagory;

use App\Qustion;
use App\UserCatagory;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class qustionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.cat_question');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('front.ask_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $newqustion = new Qustion();
            $newqustion->qustion_title = $request->input('title');
            $newqustion->qustion_desc = $request->input('body');
            $newqustion->catagoty_id = $request->input('catname');
            $newqustion->user_id = Auth::user()->id;
            $newqustion->save();

            return redirect('/addqustion');
        }
        $qustions=Catagory::all();
        $arr=Array('qustions'=>$qustions);

        return view('front.ask_question',$arr);
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
    public function selcata(Request $request)
    {
        if ($request->isMethod('post')) {
            $user_cat = array();
            $catArr = $request->input('box');
            $new = new UserCatagory();

            //dd(count($catArr));
            for($i=0; $i < count($catArr); $i++)
            {
                $user_cat[] = [
                    'catagoty_id' => $catArr[$i],
                    'user_id' => Auth::user()->id,
                ];
            }
            $new->insert($user_cat);
            return redirect('/selcat');



        }
        $cats=Catagory::all();
        $arr=Array('cats'=>$cats);

        return view('front.catagory',$arr);
    }
    public function catselect()
    {
        $cats=Catagory::all();
        return view('front.cat_index')->with('cats',$cats);
    }

    public function view(){

        $user_id = Auth::user()->id;
        $view=DB::select('select * from qustions where catagoty_id in 
(select catagoty_id from userscatagories  where user_id = '.$user_id.')');

        return response()->json($view);
    }
    public function viewqust(Request $request,$id){
        if ($request->isMethod('post')){
            $ar= new Answer();
            $ar->answer_text=$request->input('comment');
            $ar->qustion_id= $id;
            $ar->user_id= Auth::user()->id;
            $ar->save();
//            return redirect("/viewqust");
        }



        $qst = Qustion::find($id);
        $ar=Array('qst'=>$qst);

        $ans = Answer::where('qustion_id', '=', $id)->get();

        //dd($ans);
        return view('front.single_question', $ar, compact( 'ans'));

    }

//    public function viewqust(){
//        return view('front.single_question' );
//
//    }



}
