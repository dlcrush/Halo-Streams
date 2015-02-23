@extends('template/template')

@section('content')

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
      <h1>Contact Us</h1>
      <p>We're always happy to hear your questions, comments, concerns, criticisms, or ideas.</p>
      <div class="alert alert-success" role="alert" style="display:none;"><strong>Success</strong> Your message was sent successfuly. Thank you for your feedback.</div>
      <div class="alert alert-danger" role="alert" style="display:none;"><strong>Error</strong> There was an error sending your message. Please try again.</div>
      <form method="POST" id="contact-form">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" class="form-control" cols="50" rows="10"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-lg btn-block">Contact Us</button>
        </div>
      </form>
    </div>
  </div>
@endsection
