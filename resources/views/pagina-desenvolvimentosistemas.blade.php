<!doctype html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Curso - Desenvolvimento de Sistemas</title>

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

.curso-img{
width:100%;
height:350px;
object-fit:cover;
border-radius:8px;
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

<a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
Cursos
</a>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item" href= "">
Desenvolvimento de Sistemas
</a>
</li>

<li>
<a class="dropdown-item" href="{{ route ('administracao') }}" >
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
<a class="nav-link active" href="{{ route ('contato') }}">Contato</a>
</li>

</ul>
</div>

</div>
</nav>

<!-- CONTEÚDO PRINCIPAL -->
<main>

<div class="container mt-5">

<div class="text-center mb-4">
<h1>Desenvolvimento de Sistemas</h1>
<p>Aprenda a criar softwares, sites e sistemas modernos para o mercado de tecnologia.</p>
</div>

<div class="row mb-5">

<div class="col-md-12">
<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="curso-img">
</div>

</div>

<div class="row g-4">

<div class="col-md-6">
<div class="card shadow h-100">
<div class="card-body">

<h4>Sobre o Curso</h4>

<p>
O curso técnico em Desenvolvimento de Sistemas prepara o aluno para atuar na área de tecnologia da informação, desenvolvendo aplicações, sites, sistemas e bancos de dados.
</p>

<p>
Durante a formação, o estudante aprende lógica de programação, desenvolvimento web, modelagem de banco de dados e criação de softwares voltados para empresas e usuários.
</p>

</div>
</div>
</div>


<div class="col-md-6">
<div class="card shadow h-100">
<div class="card-body">

<h4>O que você vai aprender</h4>

<ul>
<li>Lógica de Programação</li>
<li>HTML, CSS e JavaScript</li>
<li>Banco de Dados</li>
<li>Desenvolvimento Web</li>
<li>Criação de Sistemas</li>
<li>Versionamento de Código</li>
<li>Boas práticas de programação</li>
</ul>

</div>
</div>
</div>


<div class="col-md-6">
<div class="card shadow h-100">
<div class="card-body">

<h4>Duração do Curso</h4>

<p>
O curso tem duração média de <strong>2 a 3 anos</strong>, dependendo da instituição, podendo ser realizado junto ao ensino médio.
</p>

</div>
</div>
</div>


<div class="col-md-6">
<div class="card shadow h-100">
<div class="card-body">

<h4>Mercado de Trabalho</h4>

<p>
O profissional formado pode atuar como desenvolvedor web, programador, analista de sistemas ou trabalhar com suporte e manutenção de sistemas em empresas de tecnologia.
</p>

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