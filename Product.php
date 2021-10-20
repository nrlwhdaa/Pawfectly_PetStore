<?php

class Product
{

 public $productArray = array(
        "ball" => array(
            'id' => 'ball',
            'name' => 'Rubber Ball',
            'code' => 'ball',
            'image' => 'images/ball.jpg',
            'price' => '2.00'
        ),
        "bed" => array(
            'id' => 'bed',
            'name' => 'Pet Bed',
            'code' => 'bed',
            'image' => 'images/bed.jpg',
            'price' => '25.00'
        ),
        "collar" => array(
            'id' => 'collar',
            'name' => 'Collar Pets',
            'code' => 'collar',
            'image' => 'images/collar.jpg',
            'price' => '2.50'
        ),
		"condo" => array(
            'id' => 'condo',
            'name' => 'Can Condo Tree',
            'code' => 'condo',
            'image' => 'images/condo.jpg',
            'price' => '80.00'
        ),
		
		"feeder" => array(
            'id' => 'feeder',
            'name' => 'Pet Feeder',
            'code' => 'feeder',
            'image' => 'product-images/feeder.png',
            'price' => '13.90'
        ),
		"hammock" => array(
            'id' => 'hammock',
            'name' => 'Standing Hammock',
            'code' => 'hammock',
            'image' => 'images/hammock.jpg',
            'price' => '19.90'
        ),
		"toys" => array(
            'id' => 'toys',
            'name' => 'Rubber Toys',
            'code' => 'toys',
            'image' => 'images/toys.jpg',
            'price' => '2.90'
        ),
		
		"litter" => array(
            'id' => 'litter',
            'name' => 'Litter Box',
            'code' => 'litter',
            'image' => 'images/litter.jpg',
            'price' => '20.00'
        ),
        "whiskas" => array(
            'id' => 'whiskas',
            'name' => 'Whiskas',
            'code' => 'whiskas',
            'image' => 'images/whiskas.jpg',
            'price' => '24.30'
        ),
		"wetfood" => array(
            'id' => 'wetfood',
            'name' => 'Whiskas Wet Food',
            'code' => 'wetfood',
            'image' => 'images/wetfood.png',
            'price' => '1.97'
        ),
		"friskies" => array(
            'id' => 'friskies',
            'name' => 'Purina Friskies',
            'code' => 'friskies',
            'image' => 'images/friskies.jpg',
            'price' => '23.50'
        ),
		"felix" => array(
            'id' => 'felic',
            'name' => 'Felix',
            'code' => 'felic',
            'image' => 'images/felic.jpg',
            'price' => '3.60'
        ),
		"happydog" => array(
            'id' => 'happydog',
            'name' => 'Happy Dog',
            'code' => 'happydog',
            'image' => 'images/happydog.jpg',
            'price' => '18.90'
        ),
		"alpo" => array(
            'id' => 'alpo',
            'name' => 'Purina Alpo',
            'code' => 'alpo',
            'image' => 'images/alpo.jpg',
            'price' => '27.00'
        ),
		
		"arden" => array(
            'id' => 'arden',
            'name' => 'Arden Grange',
            'code' => 'arden',
            'image' => 'images/arden.jpg',
            'price' => '23.70'
        ),
		"bonacibo" => array(
            'id' => 'bonacibo',
            'name' => 'Bonacibo',
            'code' => 'bonacibo',
            'image' => 'images/bonacibo.jpg',
            'price' => '4.30'
        ),
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}
?>