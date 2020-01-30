<?php require 'header.php'; 
$videos = '<iframe width="100%" height="315" src="https://www.youtube.com/embed/pX6lYqtIndk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
?>
<div class="container conteudo">
  <h1>Videos Diversos</h1>
  <hr>
  <div class="row">
  	<?php for ($i=0; $i < 9; $i++): ?>
  		<div class="col-sm-4">
	  		<div class="thumbnail">
		      <a href="<?=$videos; ?>">
		        <?=$videos; ?>
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