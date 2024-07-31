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
            <img class="logo navbar-brand" src="img/Logonbk.png" alt="Barbearia RD">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services"></a>
                    </li>
                    <li id="cab" class="nav-item">
                        <a class="nav-link" href="{{route('baberon.index')}}">AGENDAR</a>
                    </li>
                    <li id="cab" class="nav-item">
                        <a class="nav-link" href="#contact">CONTATO</a>
                    </li>
                    <li id="cab" class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="banner d-flex justify-content-center align-items-center">
        <div class="banner-text text-center">
            <h1>Bem-vindo à Barbearia RD</h1>
            <p>Onde estilo encontra tradição</p>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 image-container">
                    <h3>Corte de Cabelo</h3>
                    <p>Especializados em diversos estilos de corte.</p>
                    <img class="imagecard" src="img/Corte.jpg" alt="">
                </div>
                <div class="col-lg-4 image-container">
                    <h3>Barba</h3>
                    <p>Tratamento completo para uma barba impecável.</p>
                    <img class="imagecard" src="img/teste1.jpg" alt="">
                </div>
                <div class="col-lg-4 image-container tex">
                    <h3>Sombrancelha</h3>
                    <p>Cuidados especiais para sua sombrancelha.</p>
                    <img class="imagecard" src="img/teste2.jpg" alt="">
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
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="telefone" class="form-control" id="telefone" placeholder="(19) 99999-9999">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.200676005079!2d-46.9504253!3d-22.4320567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8f972056a6afd%3A0x82421a75176182ba!2sRd%20Studio%20de%20Beleza%20e%20Barbearia!5e0!3m2!1spt-BR!2sbr!4v[tempo]
" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
        <p>&copy; 2024 Barbearia RD. Todos os direitos reservados.</p>
            <ul class="socials">
             <li><a href="https://www.facebook.com/arrazusrd/?locale=pt_BR"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="Facebook"></a></li>
             <li><a href="https://w.app/csCWQp"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAUVBMVEVHcEzz9PP3+Pfq7er19vb//v/8/PyltKrx+PKz5b1z04cwxlYMwUMAvCkAvjMAvzoDwUBGTUiH2JiY3aXX8Nxcznbo6ulJymfQ1NHJzcq9wr8gaKU6AAAAG3RSTlMAOlmJ2f//Lvj+/v///////xX+/v7+rP56aF7BK/qjAAABgklEQVR4AX2Sh5qEMAiEbYyJqXa993/QAza5z2v7b8UMMKDNN9qu77u2+Yd+oMLQ/3UMeoCfktHIVTs5791kRWvGb73BV6YQU2ZSDJPo28c5hzYk/0UKlghfipnzl+C/ERZWVMHA59H7nL8pVp6mUTqp7310Ln1TbESdCtgQJ0fO2J+KnNl4cbhGnx0b3aJ/EO1rkoPIZZ9WAuCeNhLnHGrRBJUDtH53YdQmyEaWL1Lh+yCSxEsoeQn4btJr27kZQYtclym279uSqqMI1lTntqpI6VlhVg9M9gArsg92Cal6mHlPdfx8Emg75S6YV9dNN3WAaskTsi0Zh6bEMUH2cLHLqvDsA4LsTjzeerNhqvscJpYwa5Q9gS0w/XODKbjF2jPK3PXJrIMWcooxiyGSAkKvHX+QHICPRhnYQ0mr5LADpYFuShunWIeJ2VI5Z25gM8TA7jFEfu9Whr2awoEKi8ymYmAYm4oBh8fHfA8vESRme5URxz0XN9cxMMelcYWDt3wCfLshX3540l4AAAAASUVORK5CYII=" alt="WhatsApp"></a></li>
             <li><a href="https://www.instagram.com/daniel_rdbarbearia/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/768px-Instagram_icon.png" alt="Instagram"></a></li>
            </ul>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
