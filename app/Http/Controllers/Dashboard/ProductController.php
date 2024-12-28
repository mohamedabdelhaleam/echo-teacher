<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\StoreProductRequest;
use App\Http\Requests\Dashboard\Product\UpdateProductRequest;
use App\Services\Dashboard\ProductManagementService;
use App\Traits\Phone\EgyptianNumberTrait;
use App\Traits\StoreImageTrait;

class ProductController extends Controller
{
    use EgyptianNumberTrait, StoreImageTrait;
    protected $productManagementService;

    public function __construct(ProductManagementService $productManagementService)
    {
        $this->productManagementService = $productManagementService;
    }

    public function index()
    {
        $products = $this->productManagementService->getPaginatedProducts();
        return view("dashboard.pages.products.index", compact("products"));
    }

    public function create()
    {
        return view("dashboard.pages.products.create");
    }


    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->storeImage($request->file('image'), 'products/images');
        $product = $this->productManagementService->createNewProduct($data);
        if (!$product) {
            return redirect()->route("dashboard.products.create")->with("error", "Error in product registration");
        }
        return redirect()->route("dashboard.products.index")->with("success", "Product created successfully");
    }

    public function edit($product_id)
    {
        $product = $this->productManagementService->findProductById($product_id);
        return view("dashboard.pages.products.edit", compact("product"));
    }



    public function update(UpdateProductRequest $request, $product_id)
    {
        $data = $request->validated();
        $product = $this->productManagementService->findProductById($product_id);
        $data['image'] = basename($product->image);
        if ($request->hasFile('image')) {
            $data['image'] = $this->storeImage($request->file('image'), 'products/images');
        }
        $updateProduct = $this->productManagementService->updateProductById($product_id, $data);

        if (!$updateProduct) {
            return redirect()->back()->with("error", "Error in product update");
        }
        return redirect()->route("dashboard.products.index")->with("success", "Successfully updated");
    }


    public function destroy($id)
    {
        $this->productManagementService->deleteProductById($id);
        return response()->json(["message" => 'User deleted']);
    }
}
