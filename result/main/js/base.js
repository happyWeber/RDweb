$(function(){
	$('.par-ul li').hover(function(){
			$(this).find('.son-ul').show();
		},function(){
			$(this).find('.son-ul').hide();
		})

		// tab
		$('.bids li').click(function(){
			$('.bids li a').removeClass('active');
			$(this).find('a').addClass('active');
			var ind = $(this).index()+1;
			$('.i_box').removeClass('block');
			$('.i_'+ind).addClass('block');
			$('.moren').css('display','none');
		})
		$('.regulation li ').click(function(){
			$('.regulation li ').removeClass('active');
			$(this).addClass('active');
		})

		window.onscroll = function(){
			var top = $('body').scrollTop();
			if(top>180){
				$('.head-top').hide();
			}else{
				$('.head-top').show();
			}
		} 
		$('#man-ul li').click(function(){
			var indexM = $(this).index()+1;
			$('#man-ul li a').removeClass('active');
			$(this).find('a').addClass('active');
			var box = $('.lists-ul');
			box.hide();
			$('.box_'+indexM).show();
		})

		var i = 0;
		// $('.regulations li').click(function(){
		// 	if(i==0){
		// 		$(this).find('.res-left-ul').show();
		// 		i=1
		// 	}else{
		// 		$(this).find('.res-left-ul').hide();
		// 		i=0;
		// 	}
		// })
		$('.blue-clo').click(function(){
			$('.addvertise').hide();
		})
		$('.pic-row img').hover(function(){
			$(this).parent().find('.p-left').css('opacity','1');
			$(this).parent().find('.p-right').css('opacity','1');
		},function(){
			$(this).parent().find('.p-left').css('opacity','0.6');
			$(this).parent().find('.p-right').css('opacity','0.6');
		})

		// $(window).scroll(function() {
	 //        if( $(window).scrollTop() > 280){
	 //           $('.menu-box-m').fadeOut();
	 //        }else{
	 //        }
	 //    });

	function Center(){
		var aBox = $('.regulations li a .a-box');
		for (var i = 0; i < aBox.length; i++) {
			var ht = $(aBox[i]).height();
				if(ht > 35){
					$(aBox[i]).css('padding-top','20px');
				}else{
					$(aBox[i]).css('padding-top','30px');
				}
			}
	}
	
	// $( window ).resize(function() {
	// 	Center();
	// }
	
	$('.sear-can-m').click(function(){
		$('.search-box-m').hide();
	})
	$('.search-m').click(function(){
		$('.search-box-m').show();
		$('.menu-box-m').hide();
	})
	$(window).resize(function(){
		Center();
	});
		Center();
	
	$('.res-left-ul li').click(function(){
		$('.res-left-ul li').find('a').removeClass('active');
		$(this).find('a').addClass('active');
	})
})
