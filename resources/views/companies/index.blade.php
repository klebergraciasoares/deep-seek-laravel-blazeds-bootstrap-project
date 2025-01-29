@extends('layouts.app')

@section('title', 'Lista de Empresas')

@section('content')
<div class="container">
    <h6>Empresas</h6>
    <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Criar nova Empresa</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Code</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->code }}</td>
                <td>{{ $company->status }}</td>
                <td>
					<a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-rounded">
						<i class="fas fa-eye"></i> <!-- Ícone de Visualizar -->
					</a>
					<a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-rounded">
						<i class="fas fa-edit"></i> <!-- Ícone de Editar -->
					</a>
					<form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger btn-rounded">
							<i class="fas fa-trash"></i> <!-- Ícone de Excluir -->
						</button>
					</form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection