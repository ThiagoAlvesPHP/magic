<?php require 'header.php'; 
$imagens = 'src/img/carrossel/1.jpg';
?>
<div class="container conteudo">
  <h1>Imagens Diversas</h1>
  <hr>
  <div class="row">
  	<?php for ($i=0; $i < 9; $i++): ?>
  		<div class="col-sm-4">
	  		<div class="thumbnail">
		      <a href="<?=$imagens; ?>">
		        <img src="<?=$imagens; ?>" alt="Lights" class="img-thumbnail img_div">
		        <div class="caption">
		          <p>Imagens</p>
		        </div>
		      </a>
		    </div>
  		</div>
  	<?php endfor; ?>
  </div>

  <ul class="pagination pagination-lg">
	  <li><a href="#">1</a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	</ul>
</div>
<?php require 'footer.php'; ?>