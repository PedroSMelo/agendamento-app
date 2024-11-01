<?php

namespace App\Models;

use Carbon\Carbon;
use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mensagem extends Model
{
    public $timestamps = false;
    protected $table = 'mensagens';
    protected $fillable = [
        'id',
        'mensagem', 
        'titulo'
    ];

    
    public static function searchTittle(){

        $teste = DB::table('mensagens')->select('tipo', 'corpo')->get();
        return $teste;
    }   

    public static function create(){

        $mensagens = ([
            'titulo'   => 'teste',
            'mensagem' => 'teste'
        ]);

        return $mensagens; 
    }

    
}
