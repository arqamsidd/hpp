<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PopupProductModel extends Model
{
    protected $table = 'popup_products';

    public function getPopupProducts($id='')
    {
        $db = DB::table('popup_products');

        $db->select('popup_products.id','popup_products.sub_cat_id','popup_products.status','popup_products.name','popup_products.image_path','sub_categories.sub_cat_name','sub_categories.slug')
            ->leftjoin('sub_categories', 'sub_categories.id', '=', 'popup_products.sub_cat_id');
        if(!empty($id)){
            $db->where('popup_products.sub_cat_id',$id);
        }
        $db->where('popup_products.is_deleted',0)
            ->where('popup_products.status','1')
            ->orderBY('popup_products.id','desc');
            $query = $db->get();
        if ($query->isNotEmpty())
        {
            $res = $query;
            return $res;
        }
        else
        {
            return FALSE;
        }
    }
}
