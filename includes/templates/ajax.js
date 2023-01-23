 jQuery(document).ready(function($){
    $("#enquiry_form").submit( function(event){
      event.preventDefault();
      alert('ok');
      const form = $(this);
      console.log(form.serialize());
      $.ajax({
        type: "POST",
        url: "<?php echo get_rest_uri(null, 'v1/contact-form/submit' ); ?>",
        data: form.serialize()
      });
    });
  });