<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $products = Product::get();
        return response()
            ->json(['data' => $products]);
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
