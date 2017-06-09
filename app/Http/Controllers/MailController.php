<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PhpImap\Mailbox;
use PhpImap\IncomingMail;
use PhpImap\IncomingMailAttachment;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // 4. argument is the directory into which attachments are to be saved:
        $mailbox = new Mailbox('{192.168.22.25:143/novalidate-cert}INBOX', 'rmunoz@austromex.com.mx', 'sist.rm.08', public_path()."\mails");
//dd($mailbox.imap_check());
        // Read all messaged into an array:
        $mailsIds = $mailbox->searchMailbox('ALL');
        if(!$mailsIds) {
            die('Mailbox is empty');
        }
        /*
        $mails = array();
        foreach ($mailsIds as $key => $value) {
            array_push($mails, $mailbox->getMail($mailsIds[$key]) );
        }
        dd($mails);
        */
        dd($mailbox->getMail($mailsIds[sizeof($mailsIds)-1]));
        return ($mailbox->getMail($mailsIds[sizeof($mailsIds)-1])->textHtml);
        return "<pre>".($mailbox->getMail($mailsIds[sizeof($mailsIds)-1])->textPlain)."</pre>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // copy index
        //
        // 4. argument is the directory into which attachments are to be saved:
        $mailbox = new Mailbox('{192.168.22.25:143/imap/novalidate-cert}INBOX', 'rmunoz@austromex.com.mx', 'sist.rm.08', public_path()."\mails");

        // Read all messaged into an array:
        $mailsIds = $mailbox->searchMailbox('ALL');
        if(!$mailsIds) {
            die('Mailbox is empty');
        }
        /*
        $mails = array();
        foreach ($mailsIds as $key => $value) {
            array_push($mails, $mailbox->getMail($mailsIds[$key]) );
        }
        */
        dd($mailbox->getMail($mailsIds[0]));

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
        //
        // 4. argument is the directory into which attachments are to be saved:
        $mailbox = new Mailbox('{192.168.22.25:143/imap/novalidate-cert}INBOX', 'rmunoz@austromex.com.mx', 'sist.rm.08', public_path());

        // Read all messaged into an array:
        $mailsIds = $mailbox->searchMailbox('ALL');
        if(!$mailsIds) {
            die('Mailbox is empty');
        }
        $mails = $mailbox->deleteMail($mailsIds[sizeof($mailsIds)-1]);
        
    }
}
