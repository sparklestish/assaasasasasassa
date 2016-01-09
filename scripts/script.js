// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#signup-form").validate({
      rules:
	  {
			fname: {
		    required: true,
			minlength: 3
			},
			lname: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			phone: {
		    required: true,
			tel: true,
			minlength: 10
			},
			user_email: {
            required: true,
            email: true
            },
			imgfile: {
		    required: true,
			file: true,
			minlength: 3
			},
	   },
       messages:
	   {
            fname: "please enter your first name",
			lname: "please enter your last name",
			password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  },
			phone:{
                      required: "please provide a valid phone number",
                      minlength: "phone number should have at least 10 characters"
                     },
			user_email: "please enter a valid email address",
			imgfile: "please select an image"
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#submit-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'http://envisiongh.net/awowamoney/register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-signup").html(' &nbsp; creating account ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<h2 style="background: #FF2B2B;"> &nbsp; Sorry email already taken !</h2>');
											
											$("#btn-signup").html('Sign Up');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-signup").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									setTimeout('$(".form-signup").fadeOut(500, function(){ $(".login-screen").load("success.html"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html(' &nbsp; '+data+' !');
											
									$("#btn-signup").html(' &nbsp; Sign Up');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});