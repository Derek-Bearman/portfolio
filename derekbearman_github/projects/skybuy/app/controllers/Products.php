<?php
class Products extends Controller {
    public function __construct(){
        $this->productModel = $this->model('Product');
    }

    public function index(){
        $products = $this->productModel->getProducts();

        $data = [
            'title' => 'All Products',
            'products' => $products
        ];
       
        $this->view('products/index', $data);

    }

    public function cart(){
        $products = $this->productModel->getCart();

        $data = [
            'title' => 'Your Current Cart',
            'products' => $products
        ];
       
        $this->view('products/cart', $data);

    }

    public function category() {
        $category = isset($_POST['category']) ? $_POST['category'] : '';

        $products = $this->productModel->getProductByCategory($category);

        $data = [
            'title' => ucfirst($category),
            'products' => isset($products) ? $products : ''
        ];

        $this->view('products/index', $data);

    }

}