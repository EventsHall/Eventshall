 $(document).ready(function(){

      jQuery.validator.addMethod("alpha", function(value, element) { 
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value)
        
      },"Alphabets and space like ram rajput only");
  
    $("#guesthouse_form").validate({//("^[a-zA-Z]+$")
      
      rules:{
        guesthouse_name:{
          required: true,
          alpha:true,
          minlength:5
        },
        address1:{
          required:true,
          minlength:5
      },
          area1:{
          required:true,
          minlength:5,
          alpha:true
        },
        city1:{
          required:true,
          alpha:true,
        },
        pincode1:{
          required: true,
          number:true,
            minlength:6,
            maxlength:6
        },
        website:{
        	required:false,
        	url:true
        },
        comment1:{
          required:true,
          minlength:10
        },
        
      },
      messages:{
        guesthouse_name:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },

        address1:{
          required:"Address is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        area1:{
          required:"Area is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        city1:{
          required:"City or District is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        pincode1:{
          required:"Please Enter your Pincode or Postal number",
          number:"Enter only numbers 123456",
          minlength:" Enter minimum 6 numbers digit",
          maxlength:"Enter maximum only 6 numbers digit"
        },
        
 
       
 

      }
    });



    $("#catering_form").validate({//("^[a-zA-Z]+$")
      
      rules:{
        catering_name:{
          required: true,
          alpha:true,
          minlength:5
        },
        address2:{
          required:true,
          minlength:5
      },
          area2:{
          required:true,
          minlength:5,
          alpha:true
        },
        city2:{
          required:true,
          alpha:true,
        },
        pincode2:{
          required: true,
          number:true,
            minlength:6,
            maxlength:6
        },
        
        comment2:{
          required:true,
          minlength:10
        },
        
      },
      messages:{
        catering_name:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },

        address2:{
          required:"Address is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        area2:{
          required:"Area is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        city2:{
          required:"City or District is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        pincode2:{
          required:"Please Enter your Pincode or Postal number",
          number:"Enter only numbers 123456",
          minlength:" Enter minimum 6 numbers digit",
          maxlength:"Enter maximum only 6 numbers digit"
        },
        
 
       
 

      }
    });

    $("#studio_form").validate({//("^[a-zA-Z]+$")
      
      rules:{
        studio_name:{
          required: true,
          alpha:true,
          minlength:5
        },
        address3:{
          required:true,
          minlength:5
      },
          area3:{
          required:true,
          minlength:5,
          alpha:true
        },
        city3:{
          required:true,
          alpha:true,
        },
        pincode3:{
          required: true,
          number:true,
            minlength:6,
            maxlength:6
        },
        
        comment3:{
          required:true,
          minlength:10
        },
        
      },
      messages:{
        studio_name:{
          required:"Name is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },

        address3:{
          required:"Address is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        area3:{
          required:"Area is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        city3:{
          required:"City or District is required.... Please fill it",
          minlength:"Please Enter five characters minimum"

        },
        
        pincode3:{
          required:"Please Enter your Pincode or Postal number",
          number:"Enter only numbers 123456",
          minlength:" Enter minimum 6 numbers digit",
          maxlength:"Enter maximum only 6 numbers digit"
        },
        
 
       
 

      }
    });


   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
    });
      
 /*   $( "#guesthouse_register" ).click(function(event) {
         var form = $( "#guesthouse_form" );
         if(form.valid()){
          var form_data = $('guesthouse_form').serialize();
          $.ajax({ 
              url:'uploadpic.php',
              method: 'post',
              data: form_data + '&action=register'
          }).done(function(result){
            $('.alert').show();
            $('#result').html(result);
            
          })

        }else{
          $('.alert').show();
          $('#result').html("form not validate please validate first");
        }

      });*/