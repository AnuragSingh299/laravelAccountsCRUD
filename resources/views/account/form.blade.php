{{ Form::label('name', 'Name:') }}
@php
    $textAttributer = ['name'=>'name', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'name' ]]   
@endphp
@include('fields.text', ['attributes'=>$textAttributer])

@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
{{ Form::label('first_name', 'First Name:') }}
@php
    $textAttributer = ['name'=>'first_name', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'first_name']]   
@endphp
@include('fields.text', ['attributes'=>$textAttributer])

@error('first_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
{{ Form::label('last_name', 'Last Name:') }}
@php
    $textAttributer = ['name'=>'last_name', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'last_name']]   
@endphp
@include('fields.text', ['attributes'=>$textAttributer])

@error('last_name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>

{{ Form::label('dob', 'Date Of Birth:') }}
@php
    $textAttributer = ['name'=>'dob', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'dob']]   
@endphp
@include('fields.date', ['attributes'=>$textAttributer])

@error('dob')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
{{ Form::label('phone_no', 'Phone:') }}
@php
    $textAttributer = ['name'=>'phone_no', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'phone_no']]   
@endphp
@include('fields.tel', ['attributes'=>$textAttributer])

@error('phone_no')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
{{ Form::label('email', 'Email:') }}
@php
    $textAttributer = ['name'=>'email', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'email']]   
@endphp
@include('fields.email', ['attributes'=>$textAttributer])

@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>

{{ Form::label('address', 'Address:') }}
@php
    $textAttributer = ['name'=>'address', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'address']]   
@endphp
@include('fields.textarea', ['attributes'=>$textAttributer])

@error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>

{{ Form::label('hobby', 'Hobby:') }}
@php
    $textAttributer = ['name'=>'hobby[]', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'hobby']]   
@endphp
@include('fields.checkbox', ['attributes'=>$textAttributer])

@error('hobby[]')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>

{{ Form::label('gender', 'Gender:') }}
@php
    $textAttributer = ['name'=>'gender', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'gender']]   
@endphp
@include('fields.radio', ['attributes'=>$textAttributer])

@error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
{{ Form::label('country', 'Country:') }}
@php
    $textAttributer = ['name'=>'country', 'value'=>'', 'attributes'=>['class'=>'form-control', 'id'=>'country']]   
@endphp
@include('fields.select', ['attributes'=>$textAttributer])

@error('country')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>