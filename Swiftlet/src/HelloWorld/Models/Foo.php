<?php
namespace HelloWorld\Models;

use \Swiftlet\Abstracts\Model as ModelAbstract;

class Foo extends ModelAbstract
{
	public function getHelloWorld()
	{
		return 'Hello world!';
	}
}