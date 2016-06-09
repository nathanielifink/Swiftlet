<?php
namespace HelloWorld\Controllers;

use \Swiftlet\Abstracts\Controller as ControllerAbstract;
use \HelloWorld\Models\Example as ExampleModel;

class Foo extends ControllerAbstract
{
	protected $title = 'Foo';

	public function index()
	{
		// Get an instance of the Example class 
		// See src/HelloWorld/Models/Example.php
		$example = new ExampleModel;

		$this->view->helloWorld = $example->getHelloWorld();
	}
}