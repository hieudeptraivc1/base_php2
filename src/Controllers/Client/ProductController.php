<?php

namespace Acer\BasePhp2\Controllers\Client;

use Acer\BasePhp2\Commons\Controller;
use Acer\BasePhp2\Commons\Helper;
use Acer\BasePhp2\Models\Product;
use Rakit\Validation\Validator;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->all();

        $this->renderViewClient('index', [
            'products' => $products
        ]);
    }

    public function showclient($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewClient('detail', [
            'products' => $product
        ]);
}
}