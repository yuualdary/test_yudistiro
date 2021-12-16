<?php

namespace App\Modules\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListApproval()
    {
        //List Approval

        $list = DB::table('news')
                ->Join('users','users.id','=','news.user_id')
                ->Where([['news.status','=','ACCEPT'],])
                ->get();

        
        return response()->json([
                'response_code'=>'00',
                'response_message'=>'Success Show Data',
                'list'=> $list,
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListUnApproval()
    {
        //List UnApprove Which not Displayed on laman

        $list = DB::table('news')
                ->Join('users','users.id','=','news.user_id')
                ->Where([['news.status','=','PENDING'],['news.status','=','REJECT'],])
                ->get();

        return response()->json([
                'response_code'=>'00',
                'response_message'=>'Success Show Data',
                'list'=> $list,
                ],200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create News

        $News = News::create([
            'rolename' =>$request->rolename,
            'description' => $request->description,
            'user_id'=>$request->Auth::user()->id
        ]);

        $data['news'] = $News;

        return response()->json([
            'response_code'=>'00',
            'response_message'=>'Success Create Data',
            'data'=>$data
        ],200);

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show Detail News

        $Detail = DB::table('news')
                ->join('users','users.id','=','news.user_id')
                ->Where([['news.id','=',$id],])
                ->get();

        return response()->json([
            'response_code'=>'00',
            'response_message'=>'Showing Data',
            'Detail'=>$Detail,
            
        ],200);


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
        $News = news::find($request->$id);
        $News->status = $request->status;
        $News->Save();

        return response()->json([
            'response_code'=>'00',
            'response_message'=>'Data Updated',
            'News'=>$News,
            
        ],200);
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
