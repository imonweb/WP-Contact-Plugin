
<div class="row mt-5">
  <div class="col-md-6 offset-md-3">

    <form id="enquiry_form">
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Name" name="name">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Phone" name="phone">
      </div>
      <div class="mb-3">
        <textarea name="message" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit Form</button>
      </div>
    </form>
    
  </div>
</div>

<script>
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
</script>
  