<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProductController extends Controller
{
    public function index(String $nama){
        $product = [
            ['name' => 'Iron Sword', 'rating' => 'Rare', 'price' => '15k','id' => '1','Description' =>'Iron Sword is a rare item that can be build by iron in Minecraft.', 'Image' => 'Iron_Sword.png'],
            ['name' => 'Golden Sword', 'rating' => 'S-Rare', 'price' => '18k','id' => '2','Description' =>'Golden Sword is a Super rare item that can be build by gold in Minecraft.', 'Image' => 'Gold_sword.png'],
            ['name' => 'Wooden Sword', 'rating' => 'Rare', 'price' => '10k','id' => '3','Description' =>'Wooden Sword is a rare item that can be build by wood in Minecraft.', 'Image' => 'Wooden_sword.jpg'],
            ['name' => 'Diamond Sword', 'rating' => 'SS-Rare', 'price' => '20k','id' => '4','Description' =>'Diamond Sword is a Super-Super rare item that can be build by diamond in Minecraft.', 'Image' => 'Diamond_Sword.jpg'],
            ['name' => 'Skeleton Sword', 'rating' => 'SS-Rare', 'price' => '20k','id' => '5','Description' =>'Skeleton Sword is a Super-Super rare item that can be found by wither in Minecraft.', 'Image' => 'skeleton_sword.jpg'],
            ['name' => 'Platinum Sword', 'rating' => 'S-Rare', 'price' => '16k','id' => '6','Description' =>'Platinum Sword is a Super Rare item that can be build by Platinum? in Minecraft.', 'Image' => 'platinum_sword.jpg'],
        ];
        return view('example.product', compact('product'));
    }

    public function show(String $id){
        $product = [
            ['name' => 'Iron Sword', 'rating' => 'Rare', 'price' => '15k','id' => '1','Description' =>'Iron Sword is a rare item that can be build by iron in Minecraft.', 'Image' => 'Iron_Sword.png'],
            ['name' => 'Golden Sword', 'rating' => 'S-Rare', 'price' => '18k','id' => '2','Description' =>'Golden Sword is a Super rare item that can be build by gold in Minecraft.', 'Image' => 'Gold_sword.png'],
            ['name' => 'Wooden Sword', 'rating' => 'Rare', 'price' => '10k','id' => '3','Description' =>'Wooden Sword is a rare item that can be build by wood in Minecraft.', 'Image' => 'Wooden_sword.jpg'],
            ['name' => 'Diamond Sword', 'rating' => 'SS-Rare', 'price' => '20k','id' => '4','Description' =>'Diamond Sword is a Super-Super rare item that can be build by diamond in Minecraft.', 'Image' => 'Diamond_Sword.jpg'],
            ['name' => 'Skeleton Sword', 'rating' => 'SS-Rare', 'price' => '20k','id' => '5','Description' =>'Skeleton Sword is a Super-Super rare item that can be found by wither in Minecraft.', 'Image' => 'skeleton_sword.jpg'],
            ['name' => 'Platinum Sword', 'rating' => 'S-Rare', 'price' => '16k','id' => '6','Description' =>'Platinum Sword is a Super Rare item that can be build by Platinum? in Minecraft.', 'Image' => 'platinum_sword.jpg'],
        ];
        return view('example.description', compact('product','id'));
    }
}
