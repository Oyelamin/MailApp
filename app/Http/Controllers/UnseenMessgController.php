<?php

namespace App\Http\Controllers;

use App\UnseemM;
use Illuminate\Http\Request;
use DB;
use App\UnseenMessg;
use App\Unseen;

class UnseenMessgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email= new UnseenMessg();
       $inbox= null;
       $connection= $email->connect(
        '{imap.gmail.com:993/imap/ssl}INBOX',   //Host Name
        'blessingcodephp@gmail.com',    //Username
        'Oyelamin'  //Password
       );
       if($connection){
        
            //Inbox Array
            $inboxs= $email->getMessages('html');

        }
        // dd($inboxs['data']);
        rsort($inboxs['data']);
        // dd($inboxs);
        foreach($inboxs['data'] as $inbox){
            
            $subject= $inbox['subject'];
            $message= $inbox['message'];
            $date= $inbox['date'];
            $from_address= $inbox['from']['address'];
            $from_name= $inbox['from']['name'];
            $attachment= count($inbox['attachments']);
            
            
           Unseen::create([

               'subject' => $subject,

               'body' => $message,

               'fro' => $from_address,

               'fro_name' => $from_name,

               'date' => $date,

               'attachment' => $attachment

           ]);
        //    return dd("SAVED!!!");
         
        }

        $mess_inbox = DB::table('unseens')->orderBy('id','asc')->groupBy('subject')->paginate(30);
            // $inboxs= DB::select("SELECT * FROM `inboxes` GROUP BY `subject` ORDER BY `id` DESC");
            
        return view('mail.unseen')->with('mess_inbox',$mess_inbox);

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
     * @param  \App\UnseemM  $unseemM
     * @return \Illuminate\Http\Response
     */
    public function show(Unseen $unseen)
    {
        return view('mail.unseenMessg.show')->with('unseen',$unseen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnseemM  $unseemM
     * @return \Illuminate\Http\Response
     */
    public function edit(UnseemM $unseemM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnseemM  $unseemM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnseemM $unseemM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnseemM  $unseemM
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnseemM $unseemM)
    {
        //
    }
}
