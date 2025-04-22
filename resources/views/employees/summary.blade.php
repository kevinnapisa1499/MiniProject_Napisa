@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Summary</h1>
    <ul class="list-group mb-4">
        <li class="list-group-item">Male Employees: {{ $maleCount }}</li>
        <li class="list-group-item">Female Employees: {{ $femaleCount }}</li>
        <li class="list-group-item">Average Age: {{ number_format($averageAge, 1) }} years</li>
        <li class="list-group-item">Total Monthly Salary: ${{ number_format($totalSalary, 2) }}</li>
    </ul>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to Employee List</a>
</div>
@endsection
