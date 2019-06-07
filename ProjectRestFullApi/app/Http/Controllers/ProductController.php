<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    private $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();

        return response()->json($products, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $product = $this->product->create($data);

        if ($product) {
            return response()->json($product, Response::HTTP_OK);
        } else {
            return response()->json('produto não foi criado', Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);

        if(!$product){
            return response()->json('Produto não encontrado', Response::HTTP_NOT_FOUND);
        }else{
            return response()->json($product, Response::HTTP_OK);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();

        $product = $this->product->find($id);

        if (!$product) {
            return response()->json('Produto não encontrado', Response::HTTP_NOT_FOUND);
        }

        $product->update($data);

        return response()->json($product, Response::HTTP_CREATED);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =  $this->product->find($id);

        if(!$product){
            return response()->json('O produto não foi encontrado', Response::HTTP_NOT_FOUND);
        }
        $product->delete();

        return response()->json('Produto deletado com sucesso', Response::HTTP_OK);
    }
}
