<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Order;
class orderController extends Controller
{
    //
    public function index()
    {
    	return view('site.order.index');
    }
    public function showOrders()
    {
        $orders=Order::orderBy('id','desc')->paginate(1);
        return view('admin.orders.index',compact('orders'));
    }

     public function store(Request $request)
    {
        //

        //el kaen Request Lestrga3 el bianaat mn el form
        $order_name=$request->order_name;
        $order_desc=$request->order_desc;
        $client_phone=$request->client_phone;
        $file=$request->file('order_img');
        $destinationPath='images/orders';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destinationPath,$filename);



        

        $add=DB::table('orders')->insert([

            "order_img"=>$filename,
            "order_desc"=>$order_desc,
            "order_name"=>$order_name,
            "client_phone"=>$client_phone


            ]);

        

        //return Redirect('/adminpanel')->withFlashMessage('تم اضافة التصميم بنجاح');

        //Session()->put('flash_message','تم اضافة التصميم بنجاح');

        //return Redirect('/');

         if($add)
         {
           echo '<script> alert("لقد تم تسجيل طلبك بنجاح ,سوف يقم الادمن بالرد عليك فى أقرب وقت ");history.back();history.back();</script>'; 
         }
            


    }

    

    
}
