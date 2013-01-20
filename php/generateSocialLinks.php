 <?php 
//====================
// David Rust-Smith. Jan 4th, 2013  
// www.davidrs.com
// 2 functions, one for generating a Facebook Share link, and the other for a Twitter Tweet Link
// I also included a function that returns both.
// Do whatever you like with this script. Giving me credit would be appreciated, but is not necessary.
//====================

 
 // RETURN: an array that has the 'facebook' and 'twitter' links.
 function generateSocialLinks($appId, $link,  $title='', $caption='', $picture='', $description='', $redirect=''){
 	$returnLinks = array( 'facebook'=> '', 'twitter'=>'');
 	
 	$returnLinks['facebook']=generateFacebookShare($appId, $link,  $title,  $caption, $picture, $description, $redirect); 	
 	$returnLinks['twitter']=generateTwitterShare($link, $title);
 	
 	return $returnLinks; 	
 }
 
 
//====================
//generateFacebookShare : returns a url for a share button.
//====================

//INPUT:
/*
  $appId		// id for your app. (Get one by registering your domain as an app at http://developers.facebook.com) 
  $link			// Link to share
  
	OPTIONAL INPUTS: Facebook does its best to fill in from the website's meta tags and content.
	  $picture		// OPTIONAL: Picture to show in the share dialogue. 
	  $title		// OPTIONAL: The title of the Facebook post.
	  $caption		// OPTIONAL: The caption/sub-title of the Facebook post.
	  $description	// OPTIONAL: Body text for share dialogue
	  $redirect		// OPTIONAL: Where to redirect the sharer after sharing. uses the $ink url if not provided. 
	  
// OUTPUT: 
	string: url for sharing
*/
//====================

  function generateFacebookShare($appId, $link,  $title='', $caption='', $picture='', $description='', $redirect=''){
  
  //url encode the necessary fields.
  $title=urlencode( $title);	
  $caption=urlencode($caption); 
  $description=urlencode($description); 

  if($redirect==''){
	$redirect=$link; 
  }
  
  //create the link string  
  $finalString = 'https://www.facebook.com/dialog/feed?'.
				  'app_id='.$appId.'&'.
				  'link='.$link.
				  ($picture != '' ? ('&picture='.$picture): '').
				  ($title != '' ? ('&name='.$title) : '').
				  ($caption != '' ? ('&caption='.$caption) : '').
				  ($description != '' ? ('&description='.$description) : '').
				  '&redirect_uri='.$redirect;
	
	return $finalString;
  }
  
  
  //====================
  //generateTwitterShare : returns a url for a tweet button.
  //====================
  
  //INPUT:
  /*
   $link			// Link to share
   $text		// OPTIONAL: The caption/sub-title of the Facebook post.
  
  // OUTPUT:
  string: url for sharing via a Tweet
  */
  //====================
  
  function generateTwitterShare( $link,   $text=''){
  
  	//url encode the necessary fields.
  	$text=urlencode($text);
  	 
  	//create the link string
  	$finalString = 'https://twitter.com/share?'.
  			'url='.$link.
  			($text != '' ? ('&text='.$text) : '');
  
  	return $finalString;
  }

  ?>