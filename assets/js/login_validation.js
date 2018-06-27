 $(document).ready(function(){
 	$("#signin").validate({//("^[a-zA-Z]+$")
      
      rules:{
        email:{
          required:true,
          email:true
        },
        password:{
          required:true,
          minlength:8,
          maxlength:20
        }

      },
      messages:{
        email:{
          required:" Email field is required..  "
        },

        password:{
          required:"Password is required"
        },


      }
    });

   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      

      $( "#login" ).click(function(event) {
         var form = $( "#signin" );
         if(form.valid()){
         	event.preventDefault();
          var form_data = $('#signin').serialize();
          $.ajax({ 
              url:'action.php',
              method: 'post',
              data: form_data + '&action=login'
          }).done(function(result){
          	var data = JSON.parse(result);  

          	$('.alert').show();
          	if(data.status == 0){
              alert("amshu")
          		$('#result').html(data.msg);

          	}else{
              alert('hiiiiii');
          		document.location = 'dashboard.php';
          	}
          
            
          })

        }else{
          $('.alert').show();
          $('#result').html("Please Enter correct email-id and password");
        }

      });


 })