$(document).ready( function() {

	$('#wait').bind("ajaxSend", function() {
		$(this).show();     
	}).bind("ajaxComplete", function() {
		$(this).hide();     
	});
	
	// Hide the option to add new transaction at the beginning
	// Unhide it once a txn is added
	$("#menu_addnew_id").hide();

	// Execute when the page loads initially
	// Category is AUTO, get sub categories for AUTO
	try {
		xmlhttp = new XMLHttpRequest;
	} catch (e) {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if (xmlhttp) {		
		xmlhttp.open("POST", "form2.php", true);
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4) {
				respText = this.responseText;
				$("#gtitle_cmnts").before(respText);
				hideWaitingImage();
				//showWaitingImage();
			}
		}
		
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("subtype1=AUTO");
		showWaitingImage();
		//hideWaitingImage();
	}
	
	// This function hides the waiting image when ajax load is complete
	function hideWaitingImage() {
		$("#content").show();
		$("#wait").hide();
	}
	
	// This function shows the waiting image while ajax request response is pending
	function showWaitingImage() {
		$("#content").hide();
		$("#wait").show();
	}
	
	// Execute the function, if selection changes for Category
	// For selected category, extract subcategories
	$(".subtype1").change( function() {
		var form = document['form1'];		
		var category = form['subtype1'].value;
		var xmlhttp;
		
		try {
			xmlhttp = new XMLHttpRequest;
		} catch (e) {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		if (xmlhttp) {		
			xmlhttp.open("POST", "form2.php", true);
			xmlhttp.onreadystatechange = function () {
				if (this.readyState == 4) {
					respText = this.responseText;
					
					//alert(this.responseText);
					
					$("#pageitem_subtype2").remove();
					$("#gtitle_subcat").remove();
					//$(".button").before(respText);
					$("#gtitle_cmnts").before(respText);
				}
			}
			
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("subtype1=" + category);
		}
		
	});

	// Execute the function on clicking the "Save" button
	// Perform data load without a page refresh
	$("#id_btn").click( function() {
		
		//var amnt = $("input").attr("amnt");
		var form = document['form1'];	
		var amnt = form['amnt'].value;
		var selectdate = form['selectdate'].value;
		var errmsg;

		// Transaction date cannot be null
		// Amount value cannot be non-numeric
		if (isNaN(parseFloat(amnt)) || selectdate == "") {
			
			errmsg = "";

			if (isNaN(parseFloat(amnt))) {
				errmsg = "Amount value is not numeric:" + amnt;
			}
			
			if (selectdate == "") {			
				errmsg = errmsg + "\n" + "Expense date cannot be null";
			}
			
			alert ("Error: " + errmsg);
			
		}
		else {

			if ($("#content").length > 0) {
				
				$("#content").submit( function () {
					//alert('Hello World2!');
					
					var fields = $(":input").serializeArray();
					
					$.ajax({
						type: 'POST',
						url: 'dataload.php',
						data: fields,
						dataType: 'json',
						success: function(data) {
							if(data.error) {
							}
							else {
								$("#content").fadeOut(1, function () {
								//$("#id_btn").fadeOut(1500, function () {
									$("#content").hide().html(data.message).fadeIn(1500);
									//$("#id_btn").val("Success").fadeIn(1500);
								});
								window.scrollTo(0,0);
								
								//Unhide the option to add another expense
								$("#menu_addnew_id").show();
							}					
						},
						error: function(data) {
							$("#content").hide().html("<p>Error occured</p>").fadeIn(1500);					
						}				
					});
				
					return false;
				});
			
			}
		}
		/*
		var owner = $("#owner").val();
		var location = $("#location").val();
		var cd = $("#cd").val();
		var carddtl = $("#carddtl").val();
		var selectdate = $("#selectdate").val();
		var subtype1 = $("#subtype1").val();
		var subtype2 = $("#subtype2").val();
		var cmnts = $("#cmnts").val();
		var amnt = $("#amnt").val();
		
		alert(owner + " " + location + ' ' + cd + ' ' + carddtl + ' ' + selectdate + ' ' + subtype1 + ' ' + subtype2 + ' ' + cmnts + ' ' + amnt);
		
		var postString = 	'owner=' + owner + 
							'&location =' + location +
							'&cd=' + cd +
							'&carddtl=' + carddtl +
							'&selectdate=' + selectdate +
							'&subtype1=' + subtype1 +
							'&subtype2=' + subtype2 +
							'&cmnts=' + cmnts +
							'&amnt=' + amnt;
		$.ajax({
			type: 'POST',
			url: 'new_dataload.php',
			data: postString,
			success: function() {
				$('#content').html("<div id='message'></div>");
				$('#message').html("<h2>Data submitted</h2>")
				.hide()
				.fadeIn(1500, function() {
					$('#message').append("<b>Success!</b>");
				});
			}				
		});
		
		return false;
		*/
	});	
});

