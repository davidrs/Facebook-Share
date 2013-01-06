 <?php 
//====================
// David Rust-Smith. Jan 4th, 2013  
// www.davidrs.com
// Do whatever you like with this script. Giving me credit would be appreciated, but is not necessary.
//====================

//====================
//generateFacebookShare : returns a url for a share button.
//====================

//INPUT:
/*
  $appId		// id for your app. (Get one by registering your domain as an app at http://developers.facebook.com) 
  $link			// Link to share
  $picture		// OPTIONAL: Picture to show in the share dialogue. 
  $title		// OPTIONAL: The title of the Facebook post.
  $caption		// OPTIONAL: The caption/sub-title of the Facebook post.
  $description	// OPTIONAL: Body text for share dialogue
  $redirect		// OPTIONAL: Where to redirect the sharer after sharing. uses the $ink url if not provided. 
  
  OPTIONAL: Facebook does its best to fill in OPTIONAL tags from the website's meta tags and content.

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

  ?>