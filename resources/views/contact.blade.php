<html>

<body>
<h1>قرم تماس با ما در لاراول</h1>
<p>کاربر گرامی جهت ارتباط با ما می توانید از فرم زیر استفاده کنید</p> {{ Form::open(array('url' => 'contact')) }}
{{ Form::label('name') }}
{{ Form::text('name', 'Enter Your Name') }}
<br> {{ Form::label('email') }}
{{ Form::text('name', 'Enter Your E-Mail address') }}
<br> {{ Form::label('subject') }}
{{ Form::text('subject', 'Enter subject') }}
<br> {{ Form::label('message') }}
{{ Form::textarea('message', 'Enter your message') }}
<br> {{ Form::submit('Send Message') }}
{{ Form::close() }}

{{ Html::ul($errors -> all(), array('class' => 'errors')) }}

</body>
</html>