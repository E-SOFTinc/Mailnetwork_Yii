/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/
 
function slideSwitch() {
    var $active = $('#slideshow IMG.active');
 
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
 
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');
 
    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );
 
    $active.addClass('last-active');
 
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
            $("#cityname").fadeOut('fast', function() {
            	$("#cityname").text($next.attr('cityname'))
            	$("#cityname").fadeIn('fast')
            })
            
        });
}
 
$(function() {
    setInterval( "slideSwitch()", 5000 );
});

/*
 * Handle delete button clicks on admin pages
 */
$(document).ready(function() {
	$("td.delete a").click(function(e) {
		e.preventDefault();
	
		var answer = confirm("Delete this record?")
	
		if (!answer) {
			return
		}
	
		var link_url = $(this).attr('href');
		window.location.replace(link_url);	
	})
	
	$("td a.delete").click(function(e) {
		e.preventDefault();
	
		var answer = confirm("Delete this record?")
	
		if (!answer) {
			return
		}
	
		var link_url = $(this).attr('href');
		window.location.replace(link_url);	
	})
	
})

/*
 * Handle shipment modification clicks on admin pages
 */
$(document).ready(function() {
	$("td.shipment_modify a").click(function(e) {
		e.preventDefault();

		// Pull the surrounding shipment fields
		var ship_date   = $(this).parent().prev().text()
		var ship_desc   = $(this).parent().next().text()
		var ship_debit  = $(this).parent().next().next().text()
		var ship_credit = $(this).parent().next().next().next().text()
		// Move them to the input fields above
		$("#Shipment_shipdate").val(ship_date)
		$("#Shipment_shipdetail").val(ship_desc)
		$("#Shipment_shipdebit").val(ship_debit)
		$("#Shipment_shipcredit").val(ship_credit)
		
		// Extract shipkey from URL
		var url = $(this).attr('href').split('/')
		var length = url.length
		var shipkey = url[length-1]
		
		$(this).append('<input type="hidden" name="update" value="' + shipkey + '" />')	
	})
})

	

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29158674-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

