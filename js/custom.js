/*
secondary navigation slide effect
*/
$(document).ready(function() {
  $('#sidebarnav li a').hover(
  // on mouse over move to right
  function() {
    $(this).stop().animate({ paddingLeft: '35px' },350);
  },
  // on mouse out, move back to original position
  function() {
    $(this).stop().animate({ paddingLeft: '30px' }, 350);
  });
});


/*
opacity effect on photos on hover
*/
$(document).ready(function() {
    $('.postContainer a img.featured').hover(function() {
      $(this).stop().animate({opacity: "0.8"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 'slow');
    });
  });


/*
form
*/
$(document).ready(function() {
		var requiredFlag = ' * ';
		var requiredKey = $('input.required:first').next('span').text();
		requiredKey = requiredFlag + requiredKey.replace(/^\((.+)\)$/,"$1");
		
		$('#form :input').filter('.required')
		.next('span').text(requiredFlag).end()
		.prev('label').addClass('req-label');
		
		$('<p></p>')
		.addClass('field-keys')
		.append(requiredKey + '<br /')
		.insertBefore('#form');
	   });	

/* validate */
$(document).ready(function() {
$('#form').validate({
    rules: {
        firstname: {
             required: true
          },
         lastname: {
             required: true,
              minlength: 2
         },
		 address: {
             required: true,
              minlength: 2
         },
		 county: {
             required: true,
              minlength: 2
		 },
		 state: {
			required: true,
			minlength:2
		 },
		 phone: {
			required: true,
			minlength: 10,
			digits: 0-9
		},
		email: {
			required: true,
			minlength:2
		}
     }
  });
});