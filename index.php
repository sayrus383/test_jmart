    $products = [
        [
            "name"   => "X-Box One",
            "price"  => 450000.00,
            "amount" => 15
        ],
        [
            "name"   => "IPhone X",
            "price"  => 560000.00,
            "amount" => 6
        ],


    ];

    function my_function(&$products, int $percent)
    {
        foreach ($products as &$product) {
            $product['shipping_cost'] = $product['price'] * $percent / 100;
        }
    }

    my_function($products, 2);

    print_r($products);
