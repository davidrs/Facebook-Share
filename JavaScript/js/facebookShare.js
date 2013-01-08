function generateFacebookShare() {

  var $appId = document.fbShareForm.elements['appId'].value; 				//id for your app. (You must register your domain as an app at http://developers.facebook.com) 
  var $link=document.fbShareForm.elements['link'].value;	//Link to share
  var $picture=document.fbShareForm.elements['picture'].value;;	//Picture to show in the share dialogue. 
  var $title=document.fbShareForm.elements['title'].value;;	//The title of the Facebook post.
  var $caption=document.fbShareForm.elements['caption'].value;; //The caption/sub-title of the Facebook post.
  var $description=document.fbShareForm.elements['description'].value;;
  var $redirect= document.fbShareForm.elements['redirect'].value; // I re-use the link url, but you could redirect the sharer somewhere different.  
 
 
 
  //url encode vars if  necessary 
  $title=encodeURI($title);	
  $caption=encodeURI($caption); 
  $description=encodeURI($description); 

  if($redirect=='' ||  $redirect=='http://' ){
	$redirect=$link; 
  }
  
  if($appId==''){
	alert("AppID is required. Register your domain as an app at developers.facebook.com");
  }
	
	
var $finalString = 'https://www.facebook.com/dialog/feed?'+
				  'app_id='+$appId+'&'+
				  'link='+$link+
				  ($picture != '' ? ('&picture='+$picture): '')+
				  ($title != '' ? ('&name='+$title) : '')+
				  ($caption != '' ? ('&caption='+$caption) : '')+
				  ($description != '' ? ('&description='+$description) : '')+
				  '&redirect_uri='+$redirect;
	
$("#fbResult").html('<a href="'+$finalString+'" target="_blank">'+$finalString+'</a>');
	//alert (''+$finalString);
	
	//return false;
}
	
$(document).ready(function(){
});


