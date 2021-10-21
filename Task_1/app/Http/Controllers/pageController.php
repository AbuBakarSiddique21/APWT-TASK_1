<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function HomePage() {
        return view('Home');
    }

    public function ServicePage() {

        
        $productData = [
            'productName' => 'Laptop',
            'productBrand' => 'Dell',
            'productQuantity' => '2',
            'productPrice' => '90,0000'
        ];

        return view('productService')->with('productData', $productData);
    }

    public function TeamsPage() {
        return view('Teams');
    }

    public function AboutPage() {
        return view('About');
    }

    public function ContactPage() {
        return view('Contact');
    }

    
}