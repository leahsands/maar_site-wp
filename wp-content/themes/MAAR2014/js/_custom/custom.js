// initialize plugin
$('.contact form').validation({
  // pass an array of required field objects
  required: [
    {
      // name should reference a form inputs name attribute
      // just passing the name property will default to a check for a present value
      name: 'full_name',
    },
    {
      name: 'email',
      // pass a function to the validate property for complex custom validations
      // the function will receive the jQuery element itself, return true or false depending on validation
      validate: function($el) {
        return $el.val().match('@') !== null;
      }
    }
  ],
  // callback for failed validaiton on form submit
  fail: function() {
    Gumby.error('Form validation failed');
  },
  // callback for successful validation on form submit
  // if omited, form will submit normally
  submit: function(data) {
    $.ajax({
      url: 'do/something/with/data',
      data: data,
      success: function() {alert("Submitted");}
    });
  } 
});


$('h1').addClass('fittext');
Gumby.initialize('fittext');
