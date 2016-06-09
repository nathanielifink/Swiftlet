<?php

namespace HelloWorld\Libraries;

use \Swiftlet\Abstracts\Library as LibraryAbstract;

/**
 * Example library
 */
class FeedLib extends LibraryAbstract
{ 
	public function getURLContent($url)
	{
		$content = file_get_contents( $url );
		
		if ($content == "")
		{
			$content = null;
		}
		
		return $content;
	}
	
	public function decodeXML($xmlString)
	{
		$res = null;

		if ($xmlString && $xmlString != "")
		{
      $xmlObj = simplexml_load_string($xmlString);
			
			if ($xmlObj)
			{
        $json = json_encode($xmlObj);
				if ($json)
				{
          $res = json_decode($json,TRUE);
				}
			}
		}
		
		return $res;
	}
}
