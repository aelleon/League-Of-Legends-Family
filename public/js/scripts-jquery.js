$(document).ready(function() {
	$('#tabs-1').show();
	$('#tabs1').css("font-weight","Bold");
	$('#tabs-2').hide();
	$('#tabs-3').hide();

	$('#tabs1').click(function(){
		//alert('clicked');
		$('#tabs1').css("font-weight","Bold");
		$('#tabs1').css("font-weight","Normal");
		$('#tabs1').css("font-weight","Normal");
		$('#tabs-1').show();
		$('#tabs-2').hide();
		$('#tabs-3').hide();
	})

	$('#tabs2').click(function(){
		//alert('clicked');
		$('#tabs2').css("font-weight","Bold");
		$('#tabs3').css("font-weight","Normal");
		$('#tabs1').css("font-weight","Normal");
		$('#tabs-2').show();
		$('#tabs-1').hide();
		$('#tabs-3').hide();
	})

	$('#tabs3').click(function(){
		//alert('clicked');
		$('#tabs3').css("font-weight","Bold");
		$('#tabs2').css("font-weight","Normal");
		$('#tabs1').css("font-weight","Normal");
		$('#tabs-3').show();
		$('#tabs-2').hide();
		$('#tabs-1').hide();
	})

 $('#addParentButton').click(function(){
    var fullTitle = $('<h2 class="familyTitle">'+'New Member'+'</h2>');

    // build the details paragraph
    
    var fullDetails = $('<a href="#"<p class="profileDescription">' + 'Click to Edit!' + '</p></a>');

    $('#container1').append(fullTitle).append(fullDetails);

  });
  $('#submitButton').click(function(){

    $('#container1').append(fullTitle).append(fullDetails);

  });

})