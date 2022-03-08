@extends('layouts.app')
@section('content')
<div>
    <table class="table table-striped table-borderless">
        <tr>
            <td>Id:</td>
            <td>{{ $account->id }}</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $account->name }}</td>
        </tr>
        <tr>
            <td>First Name:</td>
            <td>{{ $account->first_name }}</td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td>{{ $account->last_name }}</td>
        </tr>
        <tr>
            <td>Date Of Birth:</td>
            <td>{{ $account->dob }}</td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td>{{ $account->phone_no }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $account->email }}</td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>{{ $account->address }}</td>
        </tr>
        <tr>
            <td>Hobby:</td>
            <td>{{ $account->hobby }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $account->gender }}</td>
        </tr>
        <tr>
            <td>Country:</td>
            <td>{{ $account->country }}</td>
        </tr>
    </table>
</div>
<a href="{{ route('account.index') }}" class="btn btn-primary">Back</a>
@endsection