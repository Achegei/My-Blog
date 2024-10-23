@extends('main')
@section('title', '| Contactus')
@section('content')

    



    <div class="row">
    <div class="col-md-12">
        <div class="blog">
        <h1>Welcome to my Blog!</h1>
        <p>Thankyou so much for visting. This is my test website built with laravel.Please read my popular post!</p>
        <button type="button" class="btn btn-primary">Popula Post</button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject</label>
                    <input id="subject" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label name="subject">Subject</label>
                    <textarea id="message" name="message" class="form-control"> Type you message here.....</textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>
   @endsection

