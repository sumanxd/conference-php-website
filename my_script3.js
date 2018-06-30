$(document).ready( function() {
 done();
});
 
function done() {
	  setTimeout( function() { 
	  updates(); 
	  done();
	  }, 200);
}
 
function updates() {
	 $.getJSON("fetch.php", function(data) {
       $("ul").empty();
	   $.each(data.result, function(){
	    $("ul").append("<ul>Name: "+this['nameandsurname']+"</ul><ul>Email: "+this['email']+"</ul><ul>Phone: "+this['phnumber']+"</ul><ul>Specialization: "+this['specialization']+"</ul><ul>Address: "+this['address']+"</ul><br/>");
	   });
 });
}















