<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mnum_info extends Model{
    protected $table = 'mnum_info';
    public $timestamps = false;

    //插入一条数据
    public static function insert_one(array $arr){
        return static::insert($arr);
    }
    //数据显示
    public static function get_index($id){
        return static::where('mid',$id)
            ->orderBy('id', 'desc')
            ->paginate(15);
    }
}