<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\Asset;
use App\Models\Booking;
use App\Models\Deal;
use App\Models\Property;
use App\Models\Amenitie;
use App\Models\Style;
use App\Models\Hotelrank;
use Arr;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class AccommodationController extends Controller
{
    public function show(){
        $accommodations =Accommodation::latest()->with(['amenities','assets','deals','styles','hotelranks'])->get();

        return view('accommodation.show', ['accommodations'=>$accommodations]);
    }

    public function create(Request $request, $id){
        $accommodation = Accommodation::findOrFail($id);             
        return view('accommodation.book', ['accommodation'=>$accommodation]);
    }

    public function make(){
        return view('accommodation.make');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'title'=>['required'],
            'location'=>['required'],
            'cost'=>['required'],
            'photo'=>['required', File::types(['png','jpeg','jpg'])]
        ]);
        $dp= $request->photo->store('accommodation');

        $accommodation = Accommodation::create([
            'title'=>$attributes['title'],
            'location'=>$attributes['location'],
            'cost'=>$attributes['cost'],
            'photo'=>$dp,
            'user_id'=>Auth::user()->id,
        ]);

         
        $tags = Arr::except($request->all(), ['title','cost','location','_token','deals','photo']);

        $deal = Arr::only($request->all(), 'deals');
            
        $deal_model = new Deal();       

        $this->access_store($deal['deals'], $deal_model, $accommodation);


        function split($tags){
            $result =[];
            foreach ($tags as $tag) {
                $tag = explode(',', $tag);
                $result[]= $tag;
            };
            return $result;
        };

        $splits= split($tags);

        foreach ($splits as $split) {
            switch ($split[1]) {
                case 'Assets':
                    $tag_model = new Asset();
                    $this->access_store($split[0], $tag_model, $accommodation);
                    break;
                case 'Amenities':
                    $tag_model = new Amenitie();
                    $this->access_store($split[0], $tag_model, $accommodation);
                    break;
                case 'Style':
                    $tag_model = new Style();
                    $this->access_store($split[0], $tag_model, $accommodation);
                    break;
                case 'Hotel Rank':
                    $tag_model = new Hotelrank();
                    $this->access_store($split[0], $tag_model, $accommodation);
                    break;            
                default:
                    break;
            }
        }

        return redirect('/accommodations');
    }

    protected function access_store(string $tag, Model $tag_model, Model $accommodation){
        //check if the tag record exists, create new tag-record && pivot-record(if false), create a pivot-record only (if true)
        $record= $tag_model::where('name', $tag)->first();

        if($record === null){
            $asset=$tag_model::create(['name'=>$tag]);
            $asset->accommodations()->attach($accommodation);
        }else {
            $record->accommodations()->attach($accommodation);
        }
    } 
}
