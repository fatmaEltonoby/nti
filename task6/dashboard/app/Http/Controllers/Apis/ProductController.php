<?php
namespace App\Http\Controllers\Apis;




use App\Models\Brand;
use App\Models\Product;
use App\traits\ApiTrait;
use App\Models\Subcategory;
use App\Http\Services\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products =Product::all();
        return ApiTrait:: data(compact ('products'));
    }

    public function create(){
        $brands = Brand::select('id','name_en','name_ar')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en','name_ar')->orderBy('name_en')->get();
        return ApiTrait:: data(compact ('brands','subcategories'),"brand & subs");
    }
    public function edit($id){
        $products =Product::findOrFail($id);
        $brands = Brand::select('id','name_en','name_ar')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en','name_ar')->orderBy('name_en')->get();
        return ApiTrait:: data(compact ('products','brands','subcategories'));
    }

    public function store(StoreProductRequest $request){
        $productImage = Media::upload($request->file('image'),'products');
        $data = $request->except('image');
        $data['image'] = $productImage;
        product::create($data);
        return ApiTrait::successMessage( 'data created sucessfully',201);

    }
    
    public function update(UpdateProductRequest $request , $id){

        $product = Product::findOrFail($id);
        $data=$request->except('_token','_method','image');
        if($request->hasFile('image')){
            $productImage = Media::upload($request->file('image'),'products');
             $removedPhotoPath = public_path("assets\images\products\\{$product->image}");
            Media::delete($removedPhotoPath);
            $data['image']= $productImage;
        }
        $product->update($data);
        return ApiTrait::successMessage( 'data updated sucessfully',200);
       

    }

    public function delete( $id){

        $product = Product::findOrFail($id);  
         $removedPhotoPath = public_path("assets\images\products\\{$product->image}");
        Media::delete($removedPhotoPath);
        
        
        $product->delete();
        return ApiTrait::successMessage( 'data deleted sucessfully',200);
       

    }


}
