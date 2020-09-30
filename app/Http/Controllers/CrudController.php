<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Laravel\Ui\ControllersCommand;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    public function getOffers(){

        return Offer::get();
    }


    public function create(){

        return view('offers.create');
    }

   /* public function  store(){

        Offer::create([
        'name' => 'offer111',
        'price' => '15',
        'details' => 'nnnnnprice ',
 ]);}*/




public function  store(Request $request)
{


    //validation dept
    $rules = $this ->getRules();
    $msgs = $this -> getMsgs();

    $validator = \Illuminate\Support\Facades\Validator::make($request ->all(),$rules,$msgs);

        if($validator ->fails()){

            //  return $validator ->errors();
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
    //return $request;

    Offer::create([
        'name' => $request ->name,
        'price' => $request ->price,
        'details' => $request ->details,
    ]);

    return redirect()->back()->with(['success' =>'تم اضافة العرض بنجاح']);


}

    protected function getRules(){

     return   $rules = [
            'name' => 'required|max:100|unique:offers,name,',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

    protected function getMsgs()
    {

        return $messages = [
            'name.required' => __('messages.name required'),
            'name.max' => __('messages.name max'),
            'name.unique' => __('messages.name unique'),
            'price.required' => __('messages.price required'),
            'price.numeric' => __('messages.price numeric'),
            'details.required' => __('messages.details required')
        ];

    }

}
