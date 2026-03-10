<!doctype html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Contato</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

html, body{
height:100%;
}

body{
display:flex;
flex-direction:column;
min-height:100vh;
background-color:#f5f5f5;
}

main{
flex:1;
}

footer{
background:#212529;
color:white;
padding:20px;
text-align:center;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#">Portal de Cursos</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route ('principal') }}">Início</a>
</li>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
Cursos
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href="{{ route ('desenvolvimentosistemas') }}">
Desenvolvimento de Sistemas
</a>
</li>

<li>
<a class="dropdown-item" href="{{ route ('administracao') }}">
Administração
</a>
</li>

<li>
<a class="dropdown-item" href="{{ route ('meio-ambiente') }}">
Meio Ambiente
</a>
</li>

<li>
<a class="dropdown-item" href="{{ route ('mecatronica') }}">
Mecatrônica
</a>
</li>

</ul>

</li>

<li class="nav-item">
<a class="nav-link" href="{{ route ('sobre') }}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="">Contato</a>
</li>

</ul>
</div>

</div>
</nav>


<!-- CONTEÚDO PRINCIPAL -->
<main>

<div class="container mt-5">

<div class="text-center mb-5">
<h1>Entre em Contato</h1>
<p>Tem alguma dúvida ou quer saber mais sobre nossos cursos? Envie uma mensagem para nós.</p>
</div>

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow p-4">

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control" placeholder="Digite seu nome">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Digite seu email">
</div>

<div class="mb-3">
<label class="form-label">Assunto</label>
<input type="text" class="form-control" placeholder="Digite o assunto">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
</div>

<div class="text-center">
<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
</div>

</form>

</div>

</div>

</div>

</div>

</main>


<!-- FOOTER -->
<footer>
Pedro Campos©
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>