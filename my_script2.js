$("#sub2").click( function() {
 $.post( $("#myForm2").attr("action"), 
         $("#myForm2 :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
 clearInput();
});
 
$("#myForm2").submit( function() {
  return false;	
});
 
function clearInput() {
	$("#myForm2 :input").each( function() {
	   $(this).val('');
	});
}

