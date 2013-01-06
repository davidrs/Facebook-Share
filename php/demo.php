<?php 
//====================
// David Rust-Smith. Jan 4th, 2013  
// www.davidrs.com
// Do whatever you like with this script. Giving me credit would be appreciated, but is not necessary.
//====================


//INPUT
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

  //inputs
  $appId="582181088462989"; 				//id for your app. (You must register your domain as an app at http://developers.facebook.com) 
  $link='http://www.davidrs.com/RadiAid/';	//Link to share
  $picture='http://davidrs.com/wp/wp-content/uploads/2012/12/Tile300x300.png';	//Picture to show in the share dialogue. 
  $title='Radi-Aid: The Game';	//The title of the Facebook post.
  $caption='Web & Mobile Friendly'; //The caption/sub-title of the Facebook post.
  $description='Help Santa deliver radiators to frozen Norwegians in this un-official game for Africa for Norway. Web & Mobile friendly.';
  $redirect= 'http://davidrs.com/wp/my-projects/radi-aid-game/'; // I re-use the link url, but you could redirect the sharer somewhere different.  
    
   
  //get and print the link string.
  echo generateFacebookShare($appId, $link,  $title,  $caption, $picture, $description, $redirect);



?>