<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegExpoRequest;
use App\Http\Requests\StoreParticipantRequest;
use App\Mail\RegistasiWebinar;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reg_expo(StoreParticipantRequest $request)
    {
        $data           = $request->validated();
        $data['user_id']=1;
        $data['has']    = md5(uniqid());
        $participant    = new Participant();
        $add            = $participant->create($data);
        if($add){
            $kirim_email = Mail::to('khaironbiz@gmail.com')->send(new RegistasiWebinar);
            if($kirim_email){
                dd('berhasil kirim email');
            }else{
                dd('gagal kirim email');
            }


        }else{
            dd('gagal tambah data');
        }

    }
    public function reg_webinar(Request $request)
    {
        //
    }
    public function submit_paper(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
