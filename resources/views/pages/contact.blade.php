@extends('main')

@section('title','Contact Me')

@section('content')

<div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <form>
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" class="form-control">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control">Please enter your message here ...</textarea>
                        <input type="submit" value="Send" class="btn btn-success" style="margin-top:10px;">
                    </form>
                </div>
            </div>
@endsection