	$(window).scroll(function() {
	if ($(this).scrollTop() > 125){  
		$('.wrap').addClass("sticky");
	  }
	  else{
		$('.wrap').removeClass("sticky");
	  }
		});

//equal height
jQuery(window).on('load', function() {
  equalHeights.set('.equal-container', '.equal-item');
});
jQuery(window).on('resize', function() {
  equalHeights.clear('.equal-container', '.equal-item');
  equalHeights.set('.equal-container', '.equal-item');
})

var equalHeights = {
	set: function(container, item) {
		jQuery(container).each(function() {

			var equalChild = jQuery(this).find(item);
			var maxHeight = -1;

			jQuery(equalChild).each(function() {
				if(jQuery(this).height() > maxHeight) {
					maxHeight = jQuery(this).height();
				}
			});

			jQuery(equalChild).each(function() {
				jQuery(this).css('height', maxHeight);
			});

		});
	},
	clear: function(container, item) {
		jQuery(container).each(function() {

			var equalChild = jQuery(this).find(item);

			jQuery(equalChild).each(function() {
				jQuery(this).css('min-height', 'auto');
			});

		});
	}
};
$(document).ready(function(){
	$('.collapsible').click(function(){
		$('.cost-sadule').slideToggle(300);
		$(this).toggleClass('in');
	})
})

	$(document).ready(function(){
		$(".carousel").carousel({
			interval:5000
		});	
		
		$(window).load(function(){
			$('#preloader').fadeOut('slow',function(){$(this).remove();});
		});	
		
		
		$("#no_of_party").change(function(){
			var no_of_party = $(this).val();
			var price = $("#originalprice").val();			
			$.ajax({
				type:"POST",
				url:base_url+"home/getCostAsPeople",
				data:"no_of_party="+no_of_party+"&price="+price,
				success: function(msg){
					$("#totalcost").html(msg);
				},
				error:function(){
					//show some error message
				}
			});
		})
		
					
		$('#btn-search').on('click', function() {
			url = base_url+'search?';
			var query  = $("#str-search").val();
			if (query) {
				url += '&q=' + encodeURIComponent(query);
			}
			location = url.replace("&","");
			return false;
		});

		$('#advanced_search').bind('click', function() {
			var destination = $("#destination").val();
			if(destination==''){
				alert('Please select your destination');
				return false;
			}
			url = base_url+'advance_search.html?';
			var activity  = $("#activities").val();
			var days      = $("#days").val();
			if(activity=='' && destination=='2'){
				alert('Please select one activity');
				return false;	
			}
			if(days==''){
				alert('Please select day(s)');
				return false;	
			}
			if (destination) {
				url += '&destination=' + encodeURIComponent(destination);
			}
			if (activity) {
				url += '&activity=' + encodeURIComponent(activity);
			}
			if (days) {
				url += '&days=' + encodeURIComponent(days);
			}
			location = url.replace("&","");
			return false;
		});	
		/********* display tripinfo ************/
		$(".view_info").click(function () {
			var info_id = $(this).attr('id');
			$.ajax({
				type : "POST",
				url    : base_url+"get_info",
				data   : "info_id="+info_id+"&action=getinfo",
				success:function(msg){
				  if(msg!='no'){
					$("#mycontent").html(msg);
					$("#myModal").modal('show');
				  }else{
					$("#mycontent").html("Error! while retrieving data");
					$("#myModal").modal('show');
				  }
				},
				beforeSend:function(){
					$("#divloader").modal('show');
				},
				complete:function(){
					$("#divloader").modal('hide');
				},
				error:function(){
					//show some error message
				}
			});
		});	
		$("#view_equipments").click(function () {
			var package_id = $(this).attr('rel');
			$.ajax({
				type : "POST",
				url    : base_url+"get_equipment",
				data   : "package_id="+package_id+"&action=getinfo",
				success:function(msg){
				  if(msg!='no'){
					$("#mycontent").html(msg);
					$("#myModal").modal('show');
				  }else{
					$("#mycontent").html("Error! while retrieving data");
					$("#myModal").modal('show');
				  }
				},
				beforeSend:function(){
					$("#divloader").modal('show');
				},
				complete:function(){
					$("#divloader").modal('hide');
				},
				error:function(){
					//show some error message
				}
			});
		});
		$(".inner-box ul").addClass('highlight');	
		$("#accept").click(function(){
			if($('#accept').is(':checked')){
				$("#submit").removeAttr('disabled');
			}else{
				$("#submit").attr('disabled','disabled');
			}
		})
		$("#termsncondition").on("click",function(){
			$.ajax({
				type : "POST",
				url    : base_url+"get_terms",
				data   : "action=getTerms",
				success:function(msg){
				  if(msg!='no'){
					$("#mycontent").html(msg);
					$("#myModal").modal('show');
				  }else{
					$("#mycontent").html("Error! while retrieving data");
					$("#myModal").modal('show');
				  }
				},
				beforeSend:function(){
					$("#divloader").modal('show');
				},
				complete:function(){
					$("#divloader").modal('hide');
				}
			});	
		});
		$("#trip_name").on("change",function(){
			if($(this).val()=='0'){
				$("#custom_trip").show();
				$("#custom_trip_name").attr('required','required');
			}else{
				$("#custom_trip").hide();
				$("#custom_trip_name").removeAttr('required');
			}
		});
	});

	
	function get_activities(category){
		var category = category
		if(category!=''){ 
			$.ajax({
				type:"POST",
				url:base_url+"get_activities",
				data:"category="+category,
				success: function(msg){
					$("#activities").html(msg);
				},
				beforeSend:function(){
					$("#divloader").modal('show');
				},
				complete:function(){
					$("#divloader").modal('hide');
				},
				error:function(){
					//show some error message
				}
			});	
		}
	}
	
	function add_news_letter(){	
		var email 		= $("#news_email").val();
		var fullname 	= $("#news_full").val();
		$.ajax({
			type:"POST",
			url:base_url+"add_news_letter",
			data:"fullname="+fullname+"&email="+email+"&action=adduser",
			success: function(msg){
				if(msg.trim()=='yes'){
					$("#news_email").val('');	
					$("#news_full").val('');	
					alert('Thank you for subscribing our newsletter');
				}else{
					alert(msg);
				}
			},
			beforeSend:function(){
				$("#divloader").modal('show');
			},
			complete:function(){
				$("#divloader").modal('hide');
			},
			error:function(){
				//show some error message
			}
		});
	}

	function PrintDetails(){
		try{ 
			var oIframe = document.getElementById('ifrmPrint');
			var oContent = document.getElementById('printme').innerHTML;
			var oDoc = (oIframe.contentWindow || oIframe.contentDocument);
			if (oDoc.document) oDoc = oDoc.document;
				oDoc.write("<html><head><title>Print Me</title>");
				oDoc.write("<link href=\"<?php echo base_url();?>themes/css/print.css\" rel=\"stylesheet\" media=\"print\" />");			
				oDoc.write("</head><body onload='this.focus(); this.print();'>");
				oDoc.write(oContent + "</body></html>");
				oDoc.close();
		}
		catch(e){
		  self.print();
		}
			
	}
	
	function get_departure(year, package_id){
		$.ajax({
			type : "POST",
			url    : base_url+"home/get_departure",
			data   : "year="+year+"&package_id="+package_id+"&action=getdeparture",
			success:function(msg){
				$("#my_departure").html(msg);
			},
			beforeSend:function(){
				$("#divloader").modal('show');
			},
			complete:function(){
				$("#divloader").modal('hide');
			},
			error:function(){
				//show some error message
			}
		});
 	 	
	}