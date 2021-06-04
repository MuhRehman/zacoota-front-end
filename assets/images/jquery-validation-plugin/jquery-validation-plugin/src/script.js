$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
		$(".form.a").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "",
					email: "enter valid email ",
					comments: ""
				}
			});
		$(".form.b").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
			});
		$(".form.c").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
		  });
		$(".form.d").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
		  });				
	});