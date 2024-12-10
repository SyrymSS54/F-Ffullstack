<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\DishModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function get_cart(Request $request,CartModel $cartModel)
    {
        $validator = Validator::make($request->all(),[
            "id" => 'required|numeric',
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $id = $validator->safe()->only(['id'])['id'];

        return response()->json($cartModel::where('user_id',Auth::id())->where('dish_id',$id)->with('dish')->first());
    }

    public function get_carts(CartModel $cartModel)
    {
        return response()->json($cartModel::where('user_id',Auth::id())->with('dish')->get());
    }

    public function up_cart(Request $request,CartModel $cartModel,DishModel $dishModel)
    {
        $validator = Validator::make($request->all(),[
            "id" => 'required|numeric',
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $id = $validator->safe()->only(['id'])['id'];

        $result = $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->first(['count','totalprice']);
        $price = $dishModel::where('id',$id)->first(['price'])['price'];


        if(is_null($result))
        {
            return response()->json(['status'=>false]);
        }

        $result = $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->update(['count'=>$result['count']+1,'totalprice'=>$result['totalprice']+$price]);

        return response()->json(['status'=>True]);
    }

    public function down_cart(CartModel $cartModel,Request $request,DishModel $dishModel)
    {
        $validator = Validator::make($request->all(),[
            "id" => 'required|numeric',
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $id = $validator->safe()->only(['id'])['id'];

        $result = $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->first(['count','totalprice']);
        $price = $dishModel::where('id',$id)->first(['price'])['price'];


        if(is_null($result))
        {
            return response()->json(['status'=>false]);
        }

        if($result['count'] == 1){
            $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->delete();
            return response()->json(['status'=>True]);
        }

        $result = $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->update(['count'=>$result['count']-1,'totalprice'=>$result['totalprice']-$price]);

        return response()->json(['status'=>True]);
    }

    public function delete_cart(CartModel $cartModel,Request $request)
    {
        $validator = Validator::make($request->all(),[
            "id" => 'required|numeric',
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $id = $validator->safe()->only(['id'])['id'];

        $cartModel::where('user_id',Auth::id())->where('dish_id',$id)->delete();
        return response()->json(['status'=>True]);
    }

    public function create_cart(Request $request,CartModel $cartModel,DishModel $dishModel)
    {
        $validator = Validator::make($request->all(),[
            "id" => 'required|numeric',
        ]);

        if($validator->fails()){
            return response()->json([]);
        }

        $id = $validator->safe()->only(['id'])['id'];

        $price = $dishModel::where('id',$id)->first(['price'])['price'];

        $cartModel->user_id = Auth::id();
        $cartModel->dish_id = $id;
        $cartModel->count = 1;
        $cartModel->totalprice = $price;
        $cartModel->save();

        return response()->json(['status'=>True]);
    }
}
