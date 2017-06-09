$(function(){
	  //Comment box scroll
  $('#comment-box').slimScroll({
    height: '280px'
  });
});
$(window).scroll(function () {
  var Bottom = $(window).scrollTop() ==0;
	if(Bottom ){
		$('#gotop-btn').hide();
	}else{
		$('#gotop-btn').show();
	}
});