@component('mail::header', ['url' => URL::to('')])
<img src="https://theoroque.herokuapp.com/images/theoroque-logo.png" alt="TheoRoque.com Logo">
@endcomponent

@component('mail::message')
<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Subject: {!! $subject !!}</p>
<p>Message: {!! $message !!}</p>
<br>
<p>** nothing follows **</p>
@endcomponent

@component('mail::footer')
Copyright © 2017 <a href="{{url('/')}}"> TheoRoque.com </a>
@endcomponent