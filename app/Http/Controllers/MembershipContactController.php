<?php

namespace App\Http\Controllers;

use App\Models\MembershipContact;
use App\Mail\ThankYou;
use Illuminate\Http\Request;
use Mail;

class MembershipContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try
        {
            Mail::to($request->email)->send(new ThankYou());
            MembershipContact::create($request->all());
            return redirect()->back()->with(['success'=>'Thank You']);
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipContact  $membershipContact
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipContact $membershipContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipContact  $membershipContact
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipContact $membershipContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipContact  $membershipContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipContact $membershipContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipContact  $membershipContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipContact $membershipContact)
    {
        //
    }
}
