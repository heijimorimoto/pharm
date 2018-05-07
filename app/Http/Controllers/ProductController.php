<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Mail;
use App\Mail\Confirmation;

class ProductController extends Controller
{
    private $module = 'product';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $products = Product::get();
        return response()
            ->json([
                'module'    =>  $this->module,
                'columns'   =>  [ 'id', 'name', 'description', 'price', 'created_at', 'updated_at' ],
                'data'      =>  $products
            ]);

        // Mail::to('heiji.morimotoo@gmail.com')->send(new Confirmation());
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param Product $product
     * @return void
     */
    public function show(
        Request $request,
        Product $product
    ) {
        return response()
            ->json(['data' => $product]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param Product $product
     * @return void
     */
    public function update(
        Request $request,
        Product $product
    ) {
        $updated = $product->update($request->input());

        if ($updated) {
            return response()
                ->json(['data' => 'Product updated']); 
        }
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param Product $product
     * @return void
     */
    public function delete(
        Request $request,
        Product $product
    ) {
        $deleted = $product->delete($request->input());
    
        if ($deleted) {
            return response()
                ->json(['data' => 'Product deleted']); 
        }
    }
}
