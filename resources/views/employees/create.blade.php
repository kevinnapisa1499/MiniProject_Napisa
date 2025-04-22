@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        @include('employees.form')
        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
