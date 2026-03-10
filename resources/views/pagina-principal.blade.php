<!doctype html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Página Principal</title>

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

.card img{
height:200px;
object-fit:cover;
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
<a class="nav-link active" href="#">Início</a>
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
<a class="dropdown-item" href="/administracao">
Administração
</a>
</li>

<li>
<a class="dropdown-item" href="/meio-ambiente">
Meio Ambiente
</a>
</li>

<li>
<a class="dropdown-item" href="/mecatronica">
Mecatrônica
</a>
</li>

</ul>

</li>

<li class="nav-item">
<a class="nav-link" href="/sobre">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/contato">Contato</a>
</li>

</ul>
</div>

</div>
</nav>


<!-- CONTEÚDO PRINCIPAL -->
<main>

<div class="container mt-5">

<div class="text-center mb-5">
<h1>Nossos Cursos Técnicos</h1>
<p>Explore nossos cursos e prepare-se para o mercado de trabalho com formação técnica de qualidade.</p>
</div>


<div class="row g-4">

<!-- Desenvolvimento de Sistemas -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>
<p class="card-text">
Curso focado em programação, desenvolvimento web, banco de dados e criação de aplicações modernas.
</p>
<a href="#" class="btn btn-primary">Saiba Mais</a>
</div>

</div>
</div>


<!-- Administração -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Administração</h5>
<p class="card-text">
Aprenda gestão empresarial, planejamento estratégico, finanças e liderança para atuar em empresas.
</p>
<a href="#" class="btn btn-primary">Saiba Mais</a>
</div>

</div>
</div>


<!-- Meio Ambiente -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>
<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais para proteger o planeta.
</p>
<a href="#" class="btn btn-primary">Saiba Mais</a>
</div>

</div>
</div>


<!-- Mecatrônica -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Mecatrônica</h5>
<p class="card-text">
Integre mecânica, eletrônica e programação para desenvolver sistemas automatizados e robótica.
</p>
<a href="#" class="btn btn-primary">Saiba Mais</a>
</div>

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