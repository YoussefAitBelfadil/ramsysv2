<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Since we're using a dummy model without a database, we'll keep the static methods
    public static function getFeaturedProducts()
    {
        return [
            [
                'id' => 1,
                'name' => 'Gaming PC - RTX 4080',
                'description' => 'High-end gaming PC with NVIDIA RTX 4080, Intel i9 processor, 32GB RAM, and 2TB SSD.',
                "short_description" =>"lorem lorem lorem" ,
                'price' => 2499.99,
                'image' => 'images/products/gaming-pc.jpg',
                'category' => 'Desktop PC',
                'specifications' => [
                    'CPU' => 'Intel Core i9-13900K',
                    'GPU' => 'NVIDIA GeForce RTX 4080 16GB',
                    'RAM' => '32GB DDR5-6000MHz',
                    'Storage' => '2TB NVMe SSD',
                    'Cooling' => 'Liquid Cooling',
                    'OS' => 'Windows 11 Pro'
                ]
            ],
            // ... other products ...
        ];
    }

    public static function find($id)
    {
        $products = self::getFeaturedProducts();
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
        return null;
    }

    // Fix the method signature to match the parent class
    public static function all($columns = ['*'])
    {
        // Since we're using a dummy model, we ignore the $columns parameter
        // In a real database model, you would use the $columns to select specific fields
        return self::getFeaturedProducts();
    }
}
