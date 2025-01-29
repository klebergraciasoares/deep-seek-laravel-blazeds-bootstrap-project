@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Company</h1>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="locator">Locator</label>
            <input type="text" name="locator" class="form-control">
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection