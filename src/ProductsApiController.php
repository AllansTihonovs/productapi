<?php

namespace allans\productapi;

use App\Http\Controllers\Controller;
use App\Models\ProductAttributes;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsApiController extends Controller
{

    //Get all products
    public function getProducts() {
        $products = Products::all();

        return $products;
    }

    //Get just attributes for specific product
    public function getProductAttributes(Request $request) {
        $request->validate([
            'product_id' => 'integer',
        ]);

        if ($request->product_id) {
            $productAttributes = ProductAttributes::where('product_id', '=', $request->product_id)->get();

            return $productAttributes;
        }
    }

    //Get specific product with attributes
    public function getProductWithAttributes(Request $request) {
        $request->validate([
            'product_id' => 'integer',
        ]);

        if ($request->product_id) {
            $productWithAttributes = Products::with('productAttributes')->where('id', '=', $request->product_id)->get();

            return $productWithAttributes;
        }
    }

    public function getProductsViewEloquent(){
        $productsWithAttributes = Products::with('productAttributes')->get();

        return view('productapi::products', compact('productsWithAttributes'));
    }

    public function getProductsViewSQL() {
        $query = "SELECT pr.id AS id, pr.name AS name, GROUP_CONCAT(prat.attribute_key) as attribute_key
        FROM products AS pr
        LEFT JOIN product_attributes AS prat ON pr.id = prat.product_id
        GROUP BY pr.id, pr.name";

        $productsWithAttributes = DB::select($query);

        foreach ($productsWithAttributes as $product) {
            $arr = explode(',', $product->attribute_key);

            $product->attribute_key = $arr;
        }

        return view('productapi::productsSQL', compact('productsWithAttributes'));
    }
}
