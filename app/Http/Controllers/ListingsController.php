<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings=Listing::orderBy('created_at','desc')->get();
        return view('listings.index')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'website'=>'required'
        ]);

        //create
        $listing=new Listing;

        //get the input
        $listing->name=$request->input('name');
        $listing->email=$request->input('email');
        $listing->website=$request->input('website');
        $listing->address=$request->input('address');
        $listing->phone=$request->input('phone');
        $listing->bio=$request->input('bio');
        $listing->user_id=auth()->user()->id;


        //save it
        $listing->save();

        //flash message and redirect
        return redirect('/dashboard')
            ->with('success','Saved Listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get the record
        $listing=Listing::find($id);
        //return the view and pass in the todo variable
        return view('listings.show')
            ->with('listing',$listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //show the edit form
    public function edit($id)
    {
        $listing=Listing::find($id);
        return view('listings.edit')
            ->with('listing',$listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //update the data from the edit form
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'website'=>'required'
        ]);


        $listing=Listing::find($id);

        //get the input
        $listing->name=$request->input('name');
        $listing->email=$request->input('email');
        $listing->website=$request->input('website');
        $listing->address=$request->input('address');
        $listing->phone=$request->input('phone');
        $listing->bio=$request->input('bio');
        $listing->user_id=auth()->user()->id;

        //save it
        $listing->save();

        //flash message and redirect
        return redirect('/dashboard')
            ->with('success','Updated Listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing=Listing::find($id);
        $listing->delete();

        //flash message and redirect
        return redirect('/dashboard')
            ->with('success','Listing deleted');
    }
}
