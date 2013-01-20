function generateSocialShare() {

	var $appId = document.fbShareForm.elements['appId'].value; 				//id for your app. (You must register your domain as an app at http://developers.facebook.com) 
	var $link=document.fbShareForm.elements['link'].value;	//Link to share
	var $picture=document.fbShareForm.elements['picture'].value;;	//Picture to show in the share dialogue. 
	var $title=document.fbShareForm.elements['title'].value;;	//The title of the Facebook post.
	var $caption=document.fbShareForm.elements['caption'].value;; //The caption/sub-title of the Facebook post.
	var $description=document.fbShareForm.elements['description'].value;;
	var $redirect= document.fbShareForm.elements['redirect'].value; // I re-use the link url, but you could redirect the sharer somewhere different.	 
	 	 	
	
	if($appId==''){
		alert("AppID is required. Register your domain as an app at developers.facebook.com");
	}
	
	$("#socialResult").html(''); //clear result div
	
	//Create facebook link
	var $facebookString = generateFacebookShare($appId, $link,  $title, $caption, $picture, $description, $redirect);		
	$("#socialResult").append('Facebook: <a href="'+$facebookString+'" target="_blank">'+$facebookString+'</a>');
	
	//Create twitter link
	var $twitterString = generateTwitterShare($link,$title);	
	$("#socialResult").append('<br />Twitter: <a href="'+$twitterString +'" target="_blank">'+$twitterString +'</a>');

};
	