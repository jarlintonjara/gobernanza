<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style type="text/css" media="screen">
	/*.dropdown:hover .dropdown-menu {
	    display: block;
	    margin-top: 0;
	}*/
</style>

<script type="text/javascript">
	$(function(){
		$('.dropdown').hover(function() {
			// alert('a');
    		$(this).toggleClass('open');
		});

		$('.dow').hover(function() {
			// alert('a');
    		$(this).toggleClass('open');
		});
	});
</script>