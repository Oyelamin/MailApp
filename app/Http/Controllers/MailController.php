<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use App\Imap;
use App\Inbox;
use DB;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index(Inbox $inbox)
    {
       $email= new Imap();
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
            // dd($inbox);
            
            $subject= $inbox['subject'];
            $message= $inbox['message'];
            $date= $inbox['date'];
            $from_address= $inbox['from']['address'];
            $from_name= $inbox['from']['name'];
            
            
           Inbox::create([

               'subject' => $subject,

               'body' => $message,

               'fro' => $from_address,

               'date' => $date

           ]);
        //    return dd("SAVED!!!");
           
       
           
         
        }

        $mess_inbox = DB::table('inboxes')->orderBy('id','asc')->groupBy('subject')->paginate(2);
            // $inboxs= DB::select("SELECT * FROM `inboxes` GROUP BY `subject` ORDER BY `id` DESC");
            
        return view('mail.index')->with('mess_inbox',$mess_inbox);

       
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
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function show(DB $db)
    {
        // $tst= DB::select("SELECT * FROM inboxes");
        // dd($tst);
            $inboxs = DB::table('inboxes')->orderBy('id','desc')->groupBy('subject')->paginate(2);
            // $inboxs= DB::select("SELECT * FROM `inboxes` GROUP BY `subject` ORDER BY `id` DESC");
            
            return view('mail.index')->with('inboxs',$inboxs);
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function edit(Mail $mail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mail $mail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mail  $mail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mail $mail)
    {
        //
    }
}
