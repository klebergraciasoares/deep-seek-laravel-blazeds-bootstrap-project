<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SAAS  ERP Salesty')</title>
    <!-- Adicione o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
	
	<style>
	
	
		.btn-rounded {
			border-radius: 50px;
		}	
	
	</style>
</head>
<body>

<!-- Menu de Navegação -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Menu</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('companies.*') ? 'active' : '' }}" href="{{ route('companies.index') }}">Empresas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('usuarios.*') ? 'active' : '' }}" href="{{ route('usuarios.index') }}">Usuários</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('produtos.*') ? 'active' : '' }}" href="{{ route('produtos.index') }}">Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('vendas.*') ? 'active' : '' }}" href="{{ route('vendas.index') }}">Vendas</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

    <div class="container">


		


        <!-- Cabeçalho -->
        <header class="my-4">
            <h6>SAAS  ERP Salesty</h6>
        </header>


        <!-- Conteúdo Principal -->
        <main>
            @yield('content')
        </main>

        <!-- Rodapé -->
        <footer class="my-4">
            <p>&copy; {{ date('Y') }} SAAS  ERP Salesty. Todos os direitos reservados.</p>
        </footer>
    </div>

    <!-- Adicione o JS do Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>