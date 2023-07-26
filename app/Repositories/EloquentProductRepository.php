<?php

namespace  App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class EloquentProductRepository
{
    public function store(string $name, string $image, float $price): void
    {
        Product::create([
            'name' => $name,
            'image' => $image,
            'price' => $price
        ]);
    }

    public function getAll(array $columns): Collection
    {
        return Product::all($columns);
    }

    public function findById(int $productId): Product
    {
        return Product::findOrFail($productId);
    }

    public function update(Product $product, string $name, string $image, float $price): void
    {
        $product->name = $name;
        $product->image = $image;
        $product->price = $price;
        $product->save();
    }

    public function delete(int $productId): bool
    {
        $product = Product::find($productId);

        if ($product) {
            $product->delete();
            return true;
        }

        return false;
    }


}
