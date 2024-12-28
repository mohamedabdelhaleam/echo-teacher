<?php

namespace App\Services\Dashboard;

use App\Models\Product;

class ProductManagementService
{
    /**
     * Retrieve a paginated list of products.
     */
    public function getPaginatedProducts()
    {
        return Product::paginate(10);
    }

    /**
     * Retrieve a single product by its ID.
     */
    public function findProductById($id)
    {
        return Product::find($id);
    }

    /**
     * Create a new product with the provided data.
     */
    public function createNewProduct(array $data)
    {
        return Product::create($data);
    }

    /**
     * Update an existing product with the given data.
     */
    public function updateProductById($id, array $data)
    {
        return Product::find($id)->update($data);
    }

    /**
     * Delete a product by its ID.
     */
    public function deleteProductById($id)
    {
        return Product::find($id)->delete();
    }
}
