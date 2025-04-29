<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getFeaturedProducts()
    {
        // Hardcoded sample products
        return [
            [
                'id' => 1,
                'name' => 'Gaming PC Pro',
                'short_description' => 'High-performance gaming PC with RTX 4080',
                'description' => 'Experience gaming like never before with our Gaming PC Pro. Featuring the latest NVIDIA RTX 4080 graphics card, Intel Core i9 processor, 32GB DDR5 RAM, and 2TB NVMe SSD storage.',
                'price' => 2499.99,
                'image' => 'images/products/pcGamer.jpeg',
                'specifications' => [
                    'CPU' => 'Intel Core i9-13900K',
                    'GPU' => 'NVIDIA RTX 4080 16GB',
                    'RAM' => '32GB DDR5 5200MHz',
                    'Storage' => '2TB NVMe SSD',
                    'Cooling' => 'Liquid Cooling',
                    'Power Supply' => '850W Gold Certified'
                ]
            ],
            [
                'id' => 2,
                'name' => 'RTX 4070 Ti Graphics Card',
                'short_description' => 'Next-gen graphics for gaming enthusiasts',
                'description' => 'The NVIDIA RTX 4070 Ti delivers exceptional performance for gaming and content creation. With 12GB GDDR6X memory and advanced ray tracing capabilities, this card will handle any modern game with ease.',
                'price' => 799.99,
                'image' => 'images/products/pcGamer.jpeg',
                'specifications' => [
                    'CUDA Cores' => '7680',
                    'Memory' => '12GB GDDR6X',
                    'Memory Interface' => '192-bit',
                    'Boost Clock' => '2.61 GHz',
                    'Power Consumption' => '285W',
                    'Recommended PSU' => '750W'
                ]
            ],
            [
                'id' => 3,
                'name' => 'Workstation PC',
                'short_description' => 'Professional workstation for content creators',
                'description' => 'Our Workstation PC is designed for professional content creators, 3D artists, and developers. With a powerful CPU and GPU combination, this machine handles resource-intensive tasks with ease.',
                'price' => 3299.99,
                'image' => 'images/products/pcGamer.jpeg',
                'specifications' => [
                    'CPU' => 'AMD Ryzen 9 7950X',
                    'GPU' => 'NVIDIA RTX 4090 24GB',
                    'RAM' => '64GB DDR5 5600MHz',
                    'Storage' => '4TB NVMe SSD',
                    'Cooling' => 'Custom Loop Liquid Cooling',
                    'Power Supply' => '1000W Platinum Certified'
                ]
            ],
            [
                'id' => 4,
                'name' => '32" 4K Gaming Monitor',
                'short_description' => 'Ultra-smooth gaming experience with 144Hz refresh rate',
                'description' => 'Immerse yourself in your games with this 32" 4K gaming monitor. Featuring a 144Hz refresh rate, 1ms response time, and HDR support, this monitor delivers stunning visuals for both gaming and content consumption.',
                'price' => 699.99,
                'image' => 'images/products/pcGamer.jpeg',
                'specifications' => [
                    'Screen Size' => '32 inches',
                    'Resolution' => '3840 x 2160 (4K)',
                    'Refresh Rate' => '144Hz',
                    'Response Time' => '1ms',
                    'Panel Type' => 'IPS',
                    'HDR' => 'HDR600',
                    'Connectivity' => 'HDMI 2.1, DisplayPort 1.4, USB-C'
                ]
            ],
            [
                'id' => 5,
                'name' => 'Mechanical Gaming Keyboard',
                'short_description' => 'RGB backlit mechanical keyboard with customizable keys',
                'description' => 'Enhance your gaming setup with our premium mechanical keyboard. Featuring tactile switches, customizable RGB lighting, and programmable macro keys, this keyboard provides both performance and style.',
                'price' => 129.99,
                'image' => 'images/products/keyboard.jpg',
                'specifications' => [
                    'Switch Type' => 'Cherry MX Blue',
                    'Backlight' => 'RGB (16.8M colors)',
                    'Connection' => 'USB-C, Wireless',
                    'Battery Life' => 'Up to 40 hours with lighting',
                    'Special Features' => 'Programmable macro keys, Media controls',
                    'Compatibility' => 'Windows, macOS, Linux'
                ]
            ],
            [
                'id' => 6,
                'name' => 'Budget Gaming PC',
                'short_description' => 'Affordable gaming PC for casual gamers',
                'description' => 'Our Budget Gaming PC offers great performance at an affordable price. Perfect for casual gamers and everyday computing tasks, this PC provides a smooth experience for most modern games at 1080p.',
                'price' => 899.99,
                'image' => 'images/products/pcGamer.jpeg',
                'specifications' => [
                    'CPU' => 'AMD Ryzen 5 5600X',
                    'GPU' => 'NVIDIA RTX 3060 12GB',
                    'RAM' => '16GB DDR4 3200MHz',
                    'Storage' => '1TB NVMe SSD',
                    'Cooling' => 'Air Cooling',
                    'Power Supply' => '650W Bronze Certified'
                ]
            ],
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
}
