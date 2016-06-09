<?php
namespace HelloWorld\Controllers;

use \Swiftlet\Abstracts\Controller as ControllerAbstract;
use \HelloWorld\Models\Feed as FeedModel;

class Feed extends ControllerAbstract
{
	protected $title = 'Last Image';

	public function index()
	{
		// Get an instance of the Feed class 
		$feed = new FeedModel;

		$this->view->lastimage = $feed->getLastImage();
	}
}