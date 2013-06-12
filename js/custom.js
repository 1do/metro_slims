/* Page Transition */

$(document).ready(function() {
	
	$("body").css("display", "none");
	
	$("body").fadeIn(1000);
    
	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(500, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
	$('#start-menu').mousemove(
		function(e){
			/* Work out mouse position */
			var offset = $(this).offset();
			var xPos = e.pageX - offset.left;
			var yPos = e.pageY - offset.top;

			/* Get percentage positions */
			var mouseXPercent = Math.round(xPos / $(this).width() * 100);
			var mouseYPercent = Math.round(yPos / $(this).height() * 100);

			/* Position Each Layer */
			$(this).children('div.layer').each(
				function(){
					var diffX = $('#start-menu').width() - $(this).width();
					var diffY = $('#start-menu').height() - $(this).height();

					var myX = diffX * (mouseXPercent / 100); //) / 100) / 2;


					var myY = diffY * (mouseYPercent / 100);


					var cssObj = {
						'left': myX + 'px',
						'top': myY + 'px'
					}
					//$(this).css(cssObj);
					$(this).animate({left: myX},{duration: 50, queue: false, easing: 'linear'});

				}
			);

		}
	);
		
	var t_prom = $("#t_prom").html();
	var t_need = (t_prom / 3 + 1);
	var plus_width = t_need * 270;
	var t_width = 1400 + plus_width;
	$("#navHome").css("width", t_width + "px");
	$(".navHome-3").css("width", plus_width + "px");
	
	$("#libLogin").click(function(){
		$(".pop").fadeIn("fast");
	});
	
	$(".cancel").click(function(){
		$(".pop").fadeOut("slow");
	});

	$("li[id]").click(function(){
		var value = $(this).attr('id');
		$(".loading").fadeIn();
		$.ajax({
			url : 'index.php',
			data : 'style='+value,
			cache : false,
			success : function(){
				location.reload();
			}
		});
	});
	
	$(".box").click(function(){
		$(this).addClass("perspec");
		$(this).mouseout(function(){
			$(this).removeClass("perspec");
		});
	});
});

/* Clock */

window.setTimeout("waktu()",1000);  
			function waktu() {   
			var tanggal = new Date();  
			setTimeout("waktu()",1000);  
			document.getElementById("jam-menit").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes();
			document.getElementById("detik").innerHTML = tanggal.getSeconds();
}

/* Slidshow */

var timer = null; 
function openContent(trigger,divID){ 
	$('#divImage div').hide();
	$('#'+divID).fadeIn('slow');
	if(timer != null) clearTimeout(timer);
	timer = setTimeout( 
		function(){		
		var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
		nextAnchor.click();
		}, 10000
	);
}	 
$(document).ready(
	function(){
	openContent($('#firstSlide'),'div1');			
	}
);