<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shaka;
use App\Models\Course;
use App\Http\Requests\ShakaRequest;
use Illuminate\Support\Facades\Session;


class ShakaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['shakas'] = Shaka::all();
        return view('branch.branch',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['courses'] = Course::arrforSelect();
        
        return view('branch.create',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShakaRequest $request)
    {
      $formdata = $request->all();

      if( Shaka::create($formdata)){
      Session::flash('message', 'Branch Added Successfully');
     }
     
     return redirect()->to('shaka');
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
        if(Shaka::find($id)->delete() ) {
            Session::flash('message', 'Branch Delete Successfully');
        }

        return redirect()->to('shaka');
    }
}
