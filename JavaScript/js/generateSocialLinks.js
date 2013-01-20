function generateFacebookShare($appId, $link,  $title, $caption, $picture, $description, $redirect){ 
	
	if($redirect==null){
			$redirect=$link; 
	}
		  
	if($redirect=='' ||$redirect=='http://' ){
		$redirect=$link; 
	}
	
	if($link=='' || $link=='http://'){
		$link=='';
		alert("warning: no link provided, won't work.");
	}
	
	if($picture=='http://'){
		$picture=='';		
	}
	
	
	  //url encode the necessary fields.
	  $title=encodeURI( $title);	
	  $caption=encodeURI($caption); 
	  $description=encodeURI($description); 


	  //create the link string  
	  var $finalString = 'https://www.facebook.com/dialog/feed?'+
					  'app_id='+$appId+'&'+
					  'link='+$link+
					  ($picture != '' ? ('&picture='+$picture): '')+
					  ($title != '' ? ('&name='+$title) : '')+
					  ($caption != '' ? ('&caption='+$caption) : '')+
					  ($description != '' ? ('&description='+$description) : '')+
					  '&redirect_uri='+$redirect;
		
	  return $finalString;
};

//====================
//generateTwitterShare ($link, $text) : returns a url for a tweet button.
//====================

//INPUT:
/*
	link		// Link to share
	text		// OPTIONAL: The caption/sub-title of the Facebook post.
	
// OUTPUT:
	string: url for sharing via a Tweet
*/
//====================
function generateTwitterShare( $link,   $text){
	if($text==null)$text = '';
	
	//url encode the necessary fields.
	$text=encodeURI($text);
	 
	//create the link string
	var $finalString = 'https://twitter.com/share?'+
			'url='+$link+
			($text != '' ? ('&text='+$text) : '');

	return $finalString;
};


