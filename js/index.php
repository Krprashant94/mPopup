<?php header("Content-type: text/javascript"); ?>
(function($) {
	p = $.fn.mPopup = function(e) {
		var data = jQuery.extend({}, jQuery.fn.mPopup, e);
		var center = (window.innerWidth/2)-(data.width/2);
		$('body').append('<div id="mPopup"> <div class="content"> <span class="img" onClick="mPopup_close();"></span> <div class="head"></div> <div class="body"></div><div class="foot"></div> </div> </div>');
		$('#mPopup').hide();
		$('body').css('overflow','hidden');
		$('#mPopup .content').addClass('morus_content');
		$('#mPopup .body').css({'height':data.height+'px'});		
		$('#mPopup .morus_content').css({'top':data.top+'px', 'left':center, 'width':data.width+'px', 'height':data.height+'px'});
		$('#mPopup').fadeIn(200);
		if(data.heading != null){
			$('#mPopup .body').css({'height':data.height-30+'px'});
			$('#mPopup .head').addClass('morus_head');
			$('#mPopup .head').html(data.heading);
		}else{$('#mPopup .head').remove();}
		if(data.url.length > 3 && data.type == 'file'){
			sender(data.method, data.send, data.url);
		}else if(data.url.length > 3 && data.type == 'image'){
			$('#mPopup .body').html('<img src="'+data.url+'" style="width:'+data.width+'px;height:'+data.height+'px;" >');
			$('#mPopup .head').remove();
		}
		if(data.footer != null){
			if(data.progress == 0){
				$('#mPopup .foot').css({'text-align':'center'});
				$('#mPopup .foot').html('<span class="morus_foot">'+data.footer+'</span>');
				$('#mPopup .morus_foot').addClass('norm');
				$('#mPopup .morus_foot').css({'background':data.back_foot, 'color':data.color_foot});
			}else{
				$('#mPopup .foot').addClass('morus_foot');
				$('#mPopup .morus_foot').html(data.footer);
				$('#mPopup .morus_foot').addClass('morus_progress');
				$('#mPopup .morus_progress').css({'background-color':data.progress, 'color':data.color_foot});
			}
		}
		$(window).resize(function(){
			$('#mPopup .content').css('left', (window.innerWidth/2)-(data.width)/2);
		});
	};
	$.extend(p, {
		version		: '1.0.0.2',
		/*-----  AJAX request  -------*/
		method		: 'POST',
		send		: null,
		url			:null,
		/*---- mPopup Styles   -----*/
		heading		: null,
		footer		: null,
		progress	: 0,
		type		: 'file',
		/*----- Content Style ------*/
		color_foot	: '#FFF',
		back_foot	: 'rgba(0, 0, 0, 0.8)',
		top			: '150',
		width		: '500',
		height		: '200',
		padding		: '10'
		
	});
	function sender(type, data, url){
		$.ajax({
			type	: type,
			data	: data,		
			url		: url,
			timeOut	: 5000,
			dataType: 'html',
			success	: function(html, textStatus) {
				$('#mPopup .body').html(html);
			},
			error: function(xhr, textStatus, errorThrown) {
				$('#mPopup .body').html("Unable to Connect...");
			}
		});
	}
})(jQuery);
function mPopup_close(){
	$('#mPopup').fadeOut(200,function(){$('#mPopup').remove();});
	$('body').css('overflow','auto');
}

$(window).bind('keydown', function(e){
	if(e.keyCode === 27){
		mPopup_close();
	}
});