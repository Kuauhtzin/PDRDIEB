<!-- Loading (remove the following to stop the loading)-->
    <div class="loader-container hidden">
    	<i class="fa fa-spin"><img src="{{asset('abrasivos-austromex.png')}}" ></i>
        	<span class="sr-only">Cargando...</span>
	</div>
<!-- end loading -->
@push('scripts')
<script type="text/javascript">
	// left: 37, up: 38, right: 39, down: 40,
	// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	  e = e || window.event;
	  if (e.preventDefault)
	      e.preventDefault();
	  e.returnValue = false;  
	}

	function preventDefaultForScrollKeys(e) {
	    if (keys[e.keyCode]) {
	        preventDefault(e);
	        return false;
	    }
	}

	function disableScroll() {
	  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
	  window.onwheel = preventDefault; // modern standard
	  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
	  window.ontouchmove  = preventDefault; // mobile
	  document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
	    if (window.removeEventListener)
	        window.removeEventListener('DOMMouseScroll', preventDefault, false);
	    window.onmousewheel = document.onmousewheel = null; 
	    window.onwheel = null; 
	    window.ontouchmove = null;  
	    document.onkeydown = null;  
	}
	// Trigger default
	$("form button[type='submit']").click(function(){
		window.scrollTo(0, 0);
		disableScroll();
		$(".loader-container").removeClass('hidden');
		setTimeout(function() {
  			$(".loader-container").addClass('hidden');
		}, 150000);
		enableScroll();
	});
	$(".trigger-loader").click(function(){
		window.scrollTo(0, 0);
		disableScroll();
		$(".loader-container").removeClass('hidden');
		setTimeout(function() {
  			$(".loader-container").addClass('hidden');
		}, 150000);
		enableScroll();
	});
	$("form").submit(function(){
		window.scrollTo(0, 0);
		disableScroll();
		$(".loader-container").removeClass('hidden');
		setTimeout(function() {
  			$(".loader-container").addClass('hidden');
		}, 150000);
		enableScroll();
	});
	
</script>
@endpush