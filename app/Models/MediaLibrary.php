<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;



class MediaLibrary extends Model

{

    use HasFactory;

    public function insert($table,$data)

    {

        return DB::table($table)->insert($data);

    }



    public function insertGetId($table,$data)

    {

        return DB::table($table)->insertGetId($data);

    }
    public function getSpecificRecord($table,$where) {
        $query = DB::table($table)->where($where)->first();
        if (!empty($query))
        {
            return (array)$query;
        }
        else
        {
            return FALSE;
        }
    }

}

