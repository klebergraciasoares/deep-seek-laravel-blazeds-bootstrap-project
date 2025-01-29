@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Company</h1>
    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $company->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" value="{{ $company->code }}" required>
        </div>
        <div class="form-group">
            <label for="locator">Locator</label>
            <input type="text" name="locator" class="form-control" value="{{ $company->locator }}">
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" class="form-control" value="{{ $company->state }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{ $company->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $company->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection