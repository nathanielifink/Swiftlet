<?php
namespace HelloWorld\Models;

use \Swiftlet\Abstracts\Model as ModelAbstract;
use \HelloWorld\Libraries\FeedLib as Lib;

define('URL', 'http://www.reddit.com/r/pics.xml');

class Feed extends ModelAbstract
{
	public function getLastImage()
	{
		$res = "http://www.51allout.co.uk/wp-content/uploads/2012/02/Image-not-found.gif";
		$lib = new Lib;
				
		$xmlString = $lib->getURLContent(URL);
		
		if (!$xmlString)
		{
			return $res;
		}

		$a = $lib->decodeXML($xmlString);
		
		if (sizeof($a) == 0)
		{
			return $res;
		}
		
		if (!isset($a['entry']))
		{
			return $res;
		}
		
		$elems = $a['entry'];
		if (sizeof($elems) == 0)
		{
			return $res;
		}
		
		$lastElem = $elems[sizeof($elems)-1];
		
		if (!isset($lastElem['content']))
		{
			return $res;
		}
		
		$content = $lastElem['content'];
		
		if (!preg_match("/<img src=\"([^\"][^\"]*)\"/", $content, $matches) || sizeof($matches) < 2)
		{
			return $res;
		}
		
		$res = $matches[1];
		
		return $res;
	}
}