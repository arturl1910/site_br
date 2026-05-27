<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-success">
            <i class="bi bi-envelope-fill text-warning"></i> Contato
        </h1>
        <div class="divider mx-auto"></div>
        <p class="lead text-dark mt-3">Entre em contato conosco</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card card-transparent shadow-lg border-0">
                <div class="card-body p-4">
                    <form action="https://formsubmit.co/arturmiguel9890@gmail.com" method="POST">
                        
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://localhost/brasileirao/?page=Home">
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label fw-bold">
                                <i class="bi bi-person-fill text-success"></i> Nome
                            </label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">
                                <i class="bi bi-envelope-fill text-success"></i> Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@exemplo.com" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="assunto" class="form-label fw-bold">
                                <i class="bi bi-chat-left-text-fill text-success"></i> Assunto
                            </label>
                            <input type="text" class="form-control" id="assunto" name="_subject" placeholder="Assunto da mensagem" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensagem" class="form-label fw-bold">
                                <i class="bi bi-pencil-fill text-success"></i> Mensagem
                            </label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem aqui..." required></textarea>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-send-fill me-2"></i>Enviar Mensagem
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>