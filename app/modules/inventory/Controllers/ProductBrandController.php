<?php
/**
 * Created by PhpStorm.
 * User: etsb
 * Date: 3/30/16
 * Time: 2:04 PM
 */

namespace App\Modules\Inventory\Controllers;


use App\Country;
use App\Http\Controllers\Controller;
use App\ProductBrand;
use App\ProductGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductBrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $pageTitle = "Product Brand List";
        $model = ProductBrand::with('relCountry')->orderBy('id', 'DESC')->paginate(30);

        $countryList = array('' => 'Please Select') + Country::lists('title', 'id')->all();

        return view('inventory::product_brand.index', ['model' => $model, 'pageTitle'=> $pageTitle,'countryList'=>$countryList]);
    }

    public function search(){

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $input = $request->all();

        $buyer_exists = ProductBrand::where('title','=',$input['title'])->where('code','=',$input['code'])->exists();
        if($buyer_exists){
            Session::flash('danger',' Already Exists.');
        }else{
            /* Transaction Start Here */
            DB::beginTransaction();
            try {
                ProductBrand::create($input);
                DB::commit();
                Session::flash('message', 'Successfully added!');
            } catch (\Exception $e) {
                //If there are any exceptions, rollback the transaction`
                DB::rollback();
                Session::flash('danger', $e->getMessage());
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $pageTitle = 'View Product Brand Information';
        $model = ProductBrand::findOrFail($id);

        return view('inventory::product_brand.view', ['model' => $model, 'pageTitle'=> $pageTitle]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $pageTitle = 'Update Product Brand Information';
        $model = ProductBrand::findOrFail($id);
        $countryList = array('' => 'Please Select') + Country::lists('title', 'id')->all();

        return view('inventory::product_brand.update', ['model' => $model, 'pageTitle'=> $pageTitle,'countryList'=>$countryList]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){

        $input = $request->all();
        $model = ProductBrand::findOrFail($id);

        DB::beginTransaction();
        try {
            $model->update($input);
            DB::commit();
            Session::flash('message', "Successfully Updated");
        }
        catch ( Exception $e ){
            //If there are any exceptions, rollback the transaction
            DB::rollback();
            Session::flash('danger', $e->getMessage());
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){

        $model = ProductBrand::findOrFail($id);

        DB::beginTransaction();
        try {
            $model->delete();
            DB::commit();
            Session::flash('message', "Successfully Deleted.");

        } catch(\Exception $e) {
            DB::rollback();
            Session::flash('danger',$e->getMessage());
        }
        return redirect()->back();
    }
}