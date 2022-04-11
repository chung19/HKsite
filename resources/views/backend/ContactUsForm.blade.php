<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  {{-- contact form css --}}
  <link rel="stylesheet" type="text/css" href="./backend/css/ContactUsForm.css">
  {{-- contact form css --}}
</head>
<body>
    <div class="container mt-5 contcact-form_size">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
      {{-- Laravel Contact Form Validation  --}}
      <form action="" method="post" action="{{ route('contact.store') }}">
         <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
            @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
            @if ($errors->has('phone'))
            <div class="error">
                {{ $errors->first('phone') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                id="subject">
            @if ($errors->has('subject'))
            <div class="error">
                {{ $errors->first('subject') }}
            </div>
            @endif
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                rows="2"></textarea>
            @if ($errors->has('message'))
            <div class="error">
                {{ $errors->first('message') }}
            </div>
            @endif
        </div>
      
        <input type="submit" name="send" value="Send Message" class="btn btn-primary btn-block">
    </form>
    </div>
</body>
</html>