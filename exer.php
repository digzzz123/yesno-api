/*$decision = [1,2];
$image_yes= ['<img src="https://media3.giphy.com/media/nXxOjZrbnbRxS/giphy.gif?cid=790b76115d0c90af6950506e6775e570&rid=giphy.gif">'   ,  '<img src="https://media1.giphy.com/media/S3Ot3hZ5bcy8o/giphy.gif?cid=790b76115d0c8b2649616b366b608963&rid=giphy.gif">'];

$image_no=['<img src="https://media.giphy.com/media/gnE4FFhtFoLKM/giphy.gif">'  ,   '<img src="https://media3.giphy.com/media/pLcgO003rbeo0/giphy.gif?cid=790b76115d0c9d156e4a57772e55fcc3&rid=giphy.gif">'];

shuffle($decision);

if ($decision[0] == 1) {
	echo "Yes"; 
	shuffle($image_yes);
	echo array_pop($image_yes);
}
else {
	echo "No"; 
	shuffle($image_no);
	echo array_pop($image_no);
}


$db = [
	['Yes', '<img src="https://media3.giphy.com/media/nXxOjZrbnbRxS/giphy.gif?cid=790b76115d0c90af6950506e6775e570&rid=giphy.gif">'],
	['Yes', '<img src="https://media1.giphy.com/media/S3Ot3hZ5bcy8o/giphy.gif?cid=790b76115d0c8b2649616b366b608963&rid=giphy.gif">'],
	['No', '<img src="https://media.giphy.com/media/gnE4FFhtFoLKM/giphy.gif">'],
	['No', '<img src="https://media3.giphy.com/media/pLcgO003rbeo0/giphy.gif?cid=790b76115d0c9d156e4a57772e55fcc3&rid=giphy.gif">']
];
shuffle($db);
echo json_encode(array_pop($db));*/

/*$array = [
	[0,1,2,'dog'],
	['breed' => 'Shih Tzu'],
	['hey'] ];*/

/**
 * 
 */

// class actions
// {
	
// 	function first($hey)
// 	{
// 	$a=1 ;
// 	return $a;
// 	}
// 	function second()
// 	{
// 	$a=2;
// 	return $a;
// 	}
// }

// $GG = new actions;
// $GG->first();
// {
// $a + 1= 2;
// 1---5
// 2---5
// func
// for ($a +)
// }
//  $a =2 



/*class Dog {
	public $breed = 'Shih tzu';
	public $can_speak = true;
	public function displayBreed(){ 

		echo $this->breed;
	} 

	public function getBreed(){
		return $this->breed;
	}
}
 
$dog1 = new Dog();

$dog1->displayBreed();

$myDogsBreed = $dog1->getBreed();
echo $myDogsBreed;
echo $dog1->breed;
echo json_encode($dog1);
*/

/*class Object{
	public $answer ="no";
	public $forced ="false";
	public $image ="https://media1.giphy.com/media/S3Ot3hZ5bcy8o/giphy.gif?cid=790b76115d0c8b2649616b366b608963&rid=giphy.gif";
}
$object = new Object();
echo json_encode($object);*/
// $decision=["Yes" => 1,"No"=>2]
// if ($decision ==1)
// 	{
// 	}
// $object=;
/*$json = file_get_contents('json.json');
$json_data= json_decode($json,true);
print_r($json_data);
echo json_encode($json_data);
*/