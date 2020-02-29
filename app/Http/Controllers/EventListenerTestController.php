<?php

namespace App\Http\Controllers;

use App\Category;
use App\EventListenerModel;
use App\Mail\WelcomeUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventListenerTestController extends Controller
{
    public function create()
    {
        return view('admin.eventlistener.create');
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
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

       $evntListener= EventListenerModel::create($data);
        // $category = new Category();
        // $category->name = $request->name;
        // $category->save();
        event(new WelcomeCustomerWEvent($evntListener));

        return redirect('/home');
        // dd($request->all());
        //
    }
    //
}
