<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Mail\MailShop;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class MailsController extends Controller
{
    public function send(Request $request) {

     $data=[
            'name' => $request->name ,
            'email' => $request->email ,
            'sms' => $request->sms ,
            'image' => $request->file('image')
                ];


        Mail::to('kuanysh.kt.02@gmail.com')->send(new MailShop($data));
        return back();

    }

    public function index(){
        $products = ProductModel::orderBy('created_at')->take(9)->get();
        return view('products',[
            'products' => $products
        ]);
//        $products = ProductImage::with('products')->get();
//        return view('products', compact('products'));
    }
    public function locale($locale){
        $availableLocales = ['kz', 'en','ru'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' =>$locale]);
        App::setLocale($locale);
        return view('welcome');
    }

}
