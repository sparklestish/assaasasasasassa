$(function(){
	
	var borrowAmount = $('#borrowAmount');
	
	$('#defaultSlider').change(function(){
	    borrowAmount.html(this.value);
	});
	
	// Trigger the event on load, so
	// the value field is populated:
	
	$('#defaultSlider').change();
	
	
	
	var noofdays = $('#noofdays');
	
	$('#defaultSlider1').change(function(){
	    noofdays.html(this.value);
	});
	
	// Trigger the event on load, so
	// the value field is populated:
	
	$('#defaultSlider1').change();
});