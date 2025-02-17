<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\tshirts;
use App\Models\sweatshirts;
use App\Models\hoodies;
use App\Models\jackets;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function create(){
        return view('product.create');
    }

    
    public function store(Request $request){
        
        switch ($request->type) {
           
            case 'tshirts':
                    $productAttributes= $request->validate([
                    'name'=>'required',
                    'size'=>'required',
                    'cost'=>'required',
                    'itempath'=>['required', File::types(['png','jpeg','jpg'])]
                ]);
        
                $itempath = $request->itempath->store('tshirts');
        
                $product = tshirts::create(
                    [
                        'name'=>$productAttributes['name'],
                        'size'=>$productAttributes['size'],
                        'cost'=>$productAttributes['cost'],
                        'itempath'=>$itempath
                    ]
                ); 
                break;
            case 'sweatshirts':
                    $productAttributes= $request->validate([
                    'name'=>'required',
                    'size'=>'required',
                    'cost'=>'required',
                    'itempath'=>['required', File::types(['png','jpeg','jpg'])]
                ]);
        
                $itempath = $request->itempath->store('sweatshirts');
        
                $product = sweatshirts::create(
                    [
                        'name'=>$productAttributes['name'],
                        'size'=>$productAttributes['size'],
                        'cost'=>$productAttributes['cost'],
                        'itempath'=>$itempath
                    ]
                );
                break;
            case 'hoodies':
                    $productAttributes= $request->validate([
                    'name'=>'required',
                    'size'=>'required',
                    'cost'=>'required',
                    'itempath'=>['required', File::types(['png','jpeg','jpg'])]
                ]);
        
                $itempath = $request->itempath->store('hoodies');
        
                $product = hoodies::create(
                    [
                        'name'=>$productAttributes['name'],
                        'size'=>$productAttributes['size'],
                        'cost'=>$productAttributes['cost'],
                        'itempath'=>$itempath
                    ]
                );
                break;
            case 'jackets':
                    $productAttributes= $request->validate([
                    'name'=>'required',
                    'size'=>'required',
                    'cost'=>'required',
                    'itempath'=>['required', File::types(['png','jpeg','jpg'])]
                ]);
        
                $itempath = $request->itempath->store('public/jackets');
        
                $product = jackets::create(
                    [
                        'name'=>$productAttributes['name'],
                        'size'=>$productAttributes['size'],
                        'cost'=>$productAttributes['cost'],
                        'itempath'=>$itempath
                    ]
                );
                break;                        
            
            default:
                $productAttributes= $request->validate([
                    'name'=>'required',
                    'size'=>'required',
                    'cost'=>'required',
                    'itempath'=>['required', File::types(['png','jpeg','jpg'])]
                ]);
        
                $itempath = $request->itempath->store('products');
        
                $product = product::create(
                    [
                        'name'=>$productAttributes['name'],
                        'size'=>$productAttributes['size'],
                        'cost'=>$productAttributes['cost'],
                        'itempath'=>$itempath
                    ]
                );
    
                break;



        }
        return redirect('/createproducts', 201);
    }

    public function show(product $product){

    $products = product::all();
    $tshirts = tshirts::all();
    $sweatshirts = sweatshirts::all();
    $hoodies = hoodies::all();
    $jackets = jackets::all();   
    return view('product.show', [
        'products'=>$products, 
        'tshirts'=>$tshirts,
        'sweatshirts'=>$sweatshirts,
        'hoodies'=>$hoodies,
        'jackets'=>$jackets   
    ]);    
    }

    public function tshirts(){
        
        $tshirts = tshirts::all();
        return view('product.tshirts', ['tshirts'=>$tshirts]);
    }

    public function sweatshirts(){
        $sweatshirts = sweatshirts::all();
        return view('product.sweatshirts', ['sweatshirts'=>$sweatshirts]);
    }

    public function hoodies(){
        $hoodies = hoodies::all();
        return view('product.hoodies', ['hoodies'=>$hoodies]);
    }

    public function jackets(){
        $jackets =jackets::all();
        return view('product.jackets', ['jackets'=>$jackets]);
    }
}
