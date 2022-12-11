<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;



class CategoryModel extends Model

{
  protected $table = 'categories';
  // protected $fillable = [
  //   'whyus_title',
  //   'whyus_desc',
  //   'background_title',
  //   'background_desc',
  // ];
    use HasFactory;



    public function catSubCateoryList($cat_id)

    {

        $query = DB::table('sub_categories')

            ->select('sub_categories.*')

            ->where('sub_categories.cat_id',$cat_id)

            ->where('sub_categories.is_deleted',0)

            ->where('sub_categories.status','1')

            ->orderBY('sub_categories.sort_order','asc')

            ->get();

        if ($query->isNotEmpty())

        {

            $res = $query->toArray();

            return $res;

        }

        else

        {

            return FALSE;

        }

    }

    public function subCatProducts($sub_cat_id)

    {

        $query = DB::table('multi_tag_products')

            ->select('products.*')

            ->leftjoin('products', 'multi_tag_products.product_id', '=', 'products.id')

            ->where('multi_tag_products.sub_cat_id',$sub_cat_id)

            ->where('products.is_deleted',0)

            ->where('products.status','1')

            ->orderBY('products.sort_order','asc')

            ->get();

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



    public function cateoryCTA($cat_id)

    {

        $query = DB::table('cta')

            ->select('cta.*')

            ->where('cta.type_id',$cat_id)

            ->where('cta.type','1')

            ->where('cta.is_deleted',0)

            ->where('cta.status','1')

            ->orderBY('cta.sort_order','asc')

            ->get();

        if ($query->isNotEmpty())

        {

            $res = $query->toArray();

            return $res;

        }

        else

        {

            return FALSE;

        }

    }



    public function subCateoryCTA($sub_cat_id)

    {

        $query = DB::table('cta')

            ->select('cta.*')

            ->where('cta.type_id',$sub_cat_id)

            ->where('cta.type',2)

            ->where('cta.is_deleted',0)

            ->where('cta.status','1')

            ->orderBY('cta.sort_order','asc')

            ->get();

        if ($query->isNotEmpty())

        {

            $res = $query->toArray();

            return $res;

        }

        else

        {

            return FALSE;

        }

    }



    public function productCTA($pro_id)

    {

        $query = DB::table('cta')

            ->select('cta.*')

            ->where('cta.type_id',$pro_id)

            ->where('cta.type','3')

            ->where('cta.is_deleted',0)

            ->where('cta.status','1')

            ->orderBY('cta.sort_order','asc')

            ->get();

        if ($query->isNotEmpty())

        {

            $res = $query->toArray();

            return $res;

        }

        else

        {

            return FALSE;

        }

    }



    public function relatedProducts($sub_cat_id,$id)

    {

        $query = DB::table('multi_tag_products')

            ->select('products.id','products.name','products.feature_image_path','products.sort_order','products.slug')

            ->leftjoin('products', 'multi_tag_products.product_id', '=', 'products.id')

            ->whereIn('multi_tag_products.sub_cat_id',$sub_cat_id)

            ->where('products.id', '!=', $id)

            ->where('products.is_deleted',0)

            ->where('products.status','1')

            ->orderBY('products.sort_order','asc')

            ->limit('15')

            ->get();

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



    public function similarProducts($id)

    {

        $query = DB::table('products')

            ->select('products.id','products.name','products.feature_image_path','products.sort_order','products.slug')

            ->where('products.id', '!=', $id)

            ->inRandomOrder()

            ->where('products.is_deleted',0)

            ->where('products.status','1')

            ->where('products.best_seller_product','1')

            ->orderBY('products.sort_order','asc')

            ->limit('15')

            ->get();

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



    public function getProducts($id='')

    {

        $db = DB::table('products');



        $db->select('products.id','products.category_id','products.subcategory_id','products.slug','products.status','products.name','products.collection_image','products.sort_order','categories.cat_name','sub_categories.sub_cat_name')

            ->leftjoin('categories', 'categories.id', '=', 'products.category_id')

            ->leftjoin('sub_categories', 'sub_categories.id', '=', 'products.subcategory_id');

        if(!empty($id)){

            $db->where('products.subcategory_id',$id);

        }

        $db->where('products.is_deleted',0)


            ->orderBY('products.id','desc');

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



    public function getSubCatProducts($sub_cat_id)

    {

        $db = DB::table('multi_tag_products');



        $db->select('products.id','products.status','products.name','products.collection_image','products.sort_order','categories.cat_name','multi_tag_products.cat_id as category_id','multi_tag_products.sub_cat_id','products.sort_order','multi_tag_products.product_id','sub_categories.sub_cat_name','sub_categories.id as subcategory_id','products.slug')

        ->leftjoin('products', 'products.id', '=', 'multi_tag_products.product_id')

        ->leftjoin('categories', 'categories.id', '=', 'multi_tag_products.cat_id')

        ->leftjoin('sub_categories', 'sub_categories.id', '=', 'multi_tag_products.sub_cat_id');

        if(!empty($sub_cat_id)){

            $db->where('multi_tag_products.sub_cat_id',$sub_cat_id);

        }

        $db->where('multi_tag_products.is_deleted',0)

            ->where('products.status','1')

            ->where('products.is_deleted','0')

            ->orderBY('multi_tag_products.id','desc');

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



    //



    public function searchResult_withgroup($search)

    {

        $results = DB::table('categories')

            ->select('categories.id','categories.cat_name','sub_categories.sub_cat_name','sub_categories.slug as sub_cat_slug','products.name','products.slug as prod_slug')

            // ->where('categories.id', '!=', $id)

            ->leftjoin('sub_categories', 'categories.id', '=', 'sub_categories.cat_id')

            ->leftjoin('products', 'products.subcategory_id', '=', 'sub_categories.id')

            // ->where('categories.is_deleted',0)

            // ->where('sub_categories.is_deleted','0')

            // ->where('categories.status','1')

            // ->where('sub_categories.status','1')

            // ->where('categories.cat_name', 'LIKE', '%'.$search.'%')

            // ->orWhere('sub_categories.sub_cat_name', 'LIKE', '%'.$search.'%')

            ->where(function($query) use ($search) {

                $query->where('categories.is_deleted',0);

                //$query->where('sub_categories.is_deleted','0');

                //$query->where('products.is_deleted','0');

                $query->where('categories.status','1');

                //$query->where('sub_categories.status','1');

                //$query->where('products.status','1');

                $query->where('categories.cat_name', 'LIKE', '%'.$search.'%');

             })

            ->orWhere(function($query) use ($search) {

                $query->where('sub_categories.sub_cat_name', 'LIKE', '%'.$search.'%');

                //$query->where('products.name', 'LIKE', '%'.$search.'%');

                 //$query->where('endtime', '>=', $otherEndtime);

         })

            ->orWhere(function($query) use ($search) {

                $query->where('products.name', 'LIKE', '%'.$search.'%');

                 //$query->where('endtime', '>=', $otherEndtime);

         })

            //->orWhere('sub_categories.sub_cat_name', 'LIKE', '%'.$search.'%')

            ->get();

        if (!empty($results))

        {

            $res = $results;

            return $res;

        }

        else

        {

            return FALSE;

        }

    }



    public function searchResult($search)

    {

        $results = DB::table('search_record')

            ->select('search_record.*')

            ->where('search_record.is_deleted',0)

            ->where('search_record.status','1')

            ->where('search_record.name', 'LIKE', '%'.$search.'%')

            ->get();

        if (!empty($results))

        {

            $res = $results;

            return $res;

        }

        else

        {

            return FALSE;

        }

    }



    //Multi tag products//

    public function multiTagProd($id)

    {

        $query = DB::table('multi_tag_products')

            ->select('multi_tag_products.id','multi_tag_products.cat_id','multi_tag_products.sub_cat_id','multi_tag_products.sort_order','multi_tag_products.product_id')

            ->where('multi_tag_products.product_id',$id)

            // ->where('multi_tag_products.is_deleted',0)

            ->orderBY('multi_tag_products.id','desc')

            ->get();

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