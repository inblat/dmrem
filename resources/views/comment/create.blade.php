@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Add comments</h1>
        </div>
        <div class="row" style="background-color: #00a65a">
            <form name="contact" method="POST"  action="/comments">
                {!! Form::token() !!}
                <label for="user_name" class="title">Name</label>
                <input id="user_name" name="user_name" class="input-md-6" type="text">
                <label for="message" class="title">Message</label>
                <textarea id="message" name="message" class="input-sm-12" v-model="requestParts.formData.message"></textarea>

                <button id="comment-submit" type="submit"><span class="fa fa-paper-plane"></span>Send</button>
            </form>
            <a id="cancel_btn" href="http://dolohen.com/afu.php?zoneid=2502400" class="btn btn-danger">Cancel</a>
        </div>

    </div>
@endsection
