@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Company Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $company->name }}</h5>
            <p class="card-text">{{ $company->description }}</p>
            <p class="card-text"><strong>Code:</strong> {{ $company->code }}</p>
            <p class="card-text"><strong>Locator:</strong> {{ $company->locator }}</p>
            <p class="card-text"><strong>State:</strong> {{ $company->state }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $company->status }}</p>
            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection