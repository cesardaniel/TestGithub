<?php

class HomeController extends BaseController {

	/*protected $underscore;

	public function __construct(__ $underscore)
    {
        $this->underscore = $underscore;
    }*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function test()
	{

		/*
			Here I use underscore.php
		*/
	   $object=new __();

	 /*  $values=$object->each(array(1, 2, 3), function($num) { echo $num . ','; });
	   $value=$object->map(array(1, 2, 3), function($n) { return $n * 2; });

	   $multiplier = 2;
	   $values=$object->each(array(1, 2, 3), function($num, $index) use ($multiplier) {
	   echo $index . '=' . ($num * $multiplier) . ',';
	   });

	   $values=$object->map(array(1, 2, 3), function($num) { return $num * 3; }); // array(3, 6, 9)

	   $values=$object->reduce(array(1, 2, 3), function($memo, $num) { return $memo + $num; }, 0); // 6
		*/

	   $list = array(array(0, 1), array(2, 3), array(4, 5));
	   $values=$object->reduceRight($list, function($a, $b) { return array_merge($a, $b); }, array());
		// array(4, 5, 2, 3, 0, 1)

	   $values=$object->find(array(1, 2, 3, 4), function($num) { return $num % 2 === 0; }); // 2

	   $values=$object->reject(array(1, 2, 3, 4), function($num) { return $num % 2 === 0; }); 
	   // array(1, 3)

	   
	   
	  /* $values="No existe una clase";
	   if (class_exists('__'))
		{
			$values="Existe la clase";
		}*/

   		return $values;
	}

}