<?php require 'header.php'; ?>
<!-- carrossel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Imagens -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-resonsive" src="src/img/carrossel/1.jpg" alt="Los Angeles">
    </div>
    <div class="item">
      <img class="img-resonsive" src="src/img/carrossel/2.jpg" alt="Chicago">
    </div>
    <div class="item">
      <img class="img-resonsive" src="src/img/carrossel/3.jpg" alt="New York">
    </div>
  </div>
  <!-- controles Left & right -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container conteudo">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="well">
        <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">Fale Conosco</button>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Fale Conosco</h4>
              </div>
              <div class="modal-body">
                <form method="POST">
                  <label>Nome:</label>
                  <input type="text" name="nome" class="form-control" required="">
                  <div class="row">
                    <div class="col-sm-6">
                      <label>Fixo:</label>
                      <input type="text" name="contato" class="form-control tel" required="">
                    </div>
                    <div class="col-sm-6">
                      <label>Celular:</label>
                      <input type="text" name="nome" class="form-control cel" required="">
                    </div>
                  </div>
                  <label>E-mail:</label>
                  <input type="email" name="nome" class="form-control" required="">
                  <label>Mensagem</label>
                  <textarea class="form-control"></textarea>
                  <br>
                  <button class="btn btn-success btn-block">Enviar</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.7497612433338!2d-39.49478120567461!3d-13.748722885714795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1125b6fd20a75f36!2sAlbicod!5e0!3m2!1spt-BR!2sbr!4v1570619838140!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="col-sm-6">
      <h3>
        Em 2016, a <b>Magic Web Design</b> completou 20 anos atuando como <b>Agência de Comunicação Integrada e Marketing Digital.</b>
        <br><br>
        São duas décadas de atividade em um mercado em constante evolução, durante as quais a Magic atingiu excelência no atendimento a seus clientes, estabelecendo sedes em <b>Curitiba e São Paulo.</b>
      </h3>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>