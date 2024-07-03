<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barbearia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner d-flex justify-content-center align-items-center">
        <div class="banner-text text-center">
            <h1>Bem-vindo à Barbearia</h1>
            <p>Onde estilo encontra tradição</p>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="service-icon mb-3">
                        <i class="bi bi-scissors"></i>
                    </div>
                    <h3>Corte de Cabelo</h3>
                    <p>Profissionais especializados em diversos estilos de corte.</p>
                </div>
                <div class="col-lg-4">
                    <div class="service-icon mb-3">
                        <i class="bi bi-emoji-smile"></i>
                    </div>
                    <h3>Barba</h3>
                    <p>Tratamento completo para uma barba impecável.</p>
                </div>
                <div class="col-lg-4">
                    <div class="service-icon mb-3">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h3>Tratamentos</h3>
                    <p>Cuidados especiais para o seu cabelo e couro cabeludo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Excelente serviço e ambiente acolhedor. Minha barbearia favorita!"</p>
                            <h5 class="card-title">João Silva</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">"Profissionais altamente qualificados. Recomendo a todos."</p>
                            <h5 class="card-title">Carlos Souza</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Entre em Contato</h2>
                    <p>Tem alguma dúvida? Entre em contato conosco!</p>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Seu Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Sua Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2>Localização</h2>
                    <p>Rua Exemplo, 123, Centro, Cidade, Estado</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31109.846624049694!2d-74.0059416!3d40.7127757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzBCMDE0JzU2LjAiTiA3NMKwMDBCJzM0LjAiVw!5e0!3m2!1spt-BR!2sbr!4v1620076762018!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
