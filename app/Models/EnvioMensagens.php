<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnvioMensagens extends Model
{
    static $remetente = "Agendamento";

    protected $table    = 'envio_mensagens';
    protected $fillable = ['id','email', 'numero'];


    public function list()
    {
        return DB::table('envio_mensagens')->select('*')->get();
    }

    public function sendEmail($email ,$nome ,$mensagem , $assunto)
    {    
        Mail::send([],[], function ($m) use ($email ,$nome ,$mensagem ,$assunto){
            $m->from(env('MAIL_FROM_ADDRESS'), self::$remetente);
            $m->subject($assunto);
            $m->html($mensagem);
            $m->to($email, $nome);
        });
    }

}
