<?php
namespace HelloWorld\Listeners;

use \Swiftlet\Abstracts\Controller as ControllerAbstract;
use \Swiftlet\Abstracts\Listener as ListenerAbstract;
use \Swiftlet\Abstracts\View as ViewAbstract;

class Foo extends ListernerAbstract
{
	public function actionAfter(ControllerAbstract $controller, ViewAbstract $view)
	{
		// Overwrite our previously set "helloWorld" variable
		$view->helloWorld = 'Hi world!';
	}
}