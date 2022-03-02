$(document).ready(function () {
    $("form").submit(function (event) {
      var formData = {
        id: $("#id").val(),
        name: $("#name").val(),
        price: $("#price").val(),
        qty: $("#qty").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "viewCart.php?id=<?php echo $_SESSION['id']?>",
        data: formData,
        success: function(data){
            location.href='viewCart.php?id=<?php echo $_SESSION['id']?>';
            $('.success').fadeIn(200).show();
            $('.error').fadeOut(200).hide();
           }
      });
      event.preventDefault();
    });
  });

  jQuery(function(){
    var j = jQuery; //Just a variable for using jQuery without conflicts
    var addInput = '#quantity'; //This is the id of the input you are changing
    var n = 1; //n is equal to 1
    
    //Set default value to n (n = 1)
    j(addInput).val(n);
  
    //On click add 1 to n
    j('.plus').on('click', function(){
      j(addInput).val(++n);
    })
  
    j('.min').on('click', function(){
      //If n is bigger or equal to 1 subtract 1 from n
      if (n >= 1) {
        j(addInput).val(--n);
      } else {
        //Otherwise do nothing
      }
    });
  });

  
