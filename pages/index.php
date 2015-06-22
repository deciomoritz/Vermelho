<!DOCTYPE html>
<html>
	<head>
		<title>Rock Stub</title>
		<meta charset="UTF-8"> 
		<link rel="stylesheet" href="../styles/bootstrap-3.3.4-dist/css/bootstrap.css">
		<link rel="stylesheet" href="../styles/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../styles/styles.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../styles/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cinzel:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	</head>
	<body>
		<?php include 'conn.php';?>
		<header>
			<nav class="navbar navbar-inverse navbar-fixed-top menu-item" id="my-navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
						<div class="collapse navbar-collapse menu-container" id="navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="menu-item"><a class="menu-item" href="#home">HOME</a></li>
								<li class="menuBarLi"><a href="#about">ABOUT</a></li>
								<li class="menuBarLi"><a href="#shows">SHOWS</a></li>
								<li class="menuBarLi"><a href="#musicas">MÚSICAS</a></li>
								<li class="menuBarLi"><a href="#videoclipes">VIDEOCLIPES</a></li>
								<li class="menuBarLi"><a href="#contato">CONTATO</a></li>
							</ul> 
						</div>
				</div>
			</nav>			
		</header>
		
		<div class="container">
			<section>
				<div class="page-header" id="home">
				</div>

				<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#screenshot-carousel" data-slide-to="1"></li>
						<li data-target="#screenshot-carousel" data-slide-to="2"></li>
					</ol>

						<?php
							$query = "SELECT media.name,media.path FROM frame,media WHERE media.frame_id = frame.id AND frame.name = 'home'";

							$result = $conn->query($query);

							$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];
						?>

					<div class="carousel-inner">
						<div class="item active">
							<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];
							?>
							<img src=<?php echo "\"$imagePath$imageName\""?> alt="">
						</div>
						<div class="item">
							<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];
							?>
							<img src=<?php echo "\"$imagePath$imageName\""?> alt="">
						</div>
						<div class="item">
							<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];
							?>
							<img src=<?php echo "\"$imagePath$imageName\""?> alt="">
						</div>
					</div>

					<a class="left carousel-control" href="#screenshot-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#screenshot-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>

				<br>
				<br>

				<div class="row home">
					<?php
						$query = "SELECT media.name,media.path,text.content FROM frame,media,text WHERE media.frame_id = frame.id AND text.frame_id = frame.id AND frame.name = 'home'";

						$result = $conn->query($query);
						$row = $result->fetch();
	 
						$imageName = $row["name"];
						$imagePath = $row["path"];
						$text = $row["content"];
					?>
					<div class="col-sm-6">
						<p class="image-home"><img src =<?php echo "\"$imagePath$imageName\""?>/></p>
					</div>
					<div class="col-sm-6">
						<p class="phrase-home"><?php echo "$text"?></p>
				 	</div>
				</div>
			</section>
		</div>

		<div class="bg-grey">
			<div class="container">
				<section>
					<div class="page-header" id="about">
						<div class="my-label">
							ABOUT
						</div> 
					</div>
					
					<div class="row">
					<?php
						$query = "SELECT media.name,media.path,text.content FROM frame,media,text WHERE media.frame_id = frame.id AND text.frame_id = frame.id AND frame.name = 'about'";

						$result = $conn->query($query);
						$row = $result->fetch();
	 
						$imageName = $row["name"];
						$imagePath = $row["path"];
						$text = $row["content"];
					?>
						<div class="col-sm-6">
							<p class="image-home"><img src =<?php echo "\"$imagePath$imageName\""?>/></p>
						</div>
						<div class="col-sm-6">
							<p class="text-about"><?php echo "$text"?></p>
						</>
					</div>
				</section>
			</div>
			<br>
			<br>
		</div>

		<div class="container">
			<section>
				<div class="page-header" id="shows">
					<div class="my-label">
						SHOWS
					</div>
				</div>
				<div class="row section-container">
					<div class="col-sm-6">
						<div>
							<div>
								<img class="image" id="show1" src="../resources/images/show1.jpg">
								<div style="text-align: center; margin-top: 5%;">
									<a href="http://www.blueticket.com.br" style="color: red">Clique aqui para garantir seu ingresso</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div>
							<div>
								<img class="image" id="show2" src="../resources/images/show2.jpg">
								<div style="text-align: center; margin-top: 5%;">
									<a href="http://www.blueticket.com.br" style="color: red">Clique aqui para garantir seu ingresso</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<br>
			<br>
		</div>

		<div class="bg-grey">
			<div class="container">
				<section>
					<div class="page-header" id="musicas">
						<div class="my-label">
							MÚSICAS
						</div>
					</div>
						<?php
							$query = "SELECT media.name,media.path FROM frame,media WHERE media.frame_id = frame.id AND frame.name = 'musicas'";

							$result = $conn->query($query);
						?>
					<div class="row section-container">
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
	    			</div>
					<div class="row music-container">
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
				        <div class="col-md-4">
				        	<?php
								$row = $result->fetch();
								$imageName = $row["name"];
								$imagePath = $row["path"];

								$row = $result->fetch();
								$musicName = $row["name"];
								$musicPath = $row["path"];
							?>
				        	<div>
								<img class="image" src=<?php echo "\"$imagePath$imageName\""?>>
							</div>
							<div>
								<audio class="music" controls>
									<source src=<?php echo "\"$musicPath$musicName\""?> type="audio/mpeg">
								</audio> 
							</div>
				        </div>
				    </div>
				</section>
			</div>
			<br>
			<br>
		</div>
		
		<div class="container">
			<section>
				<div class="page-header" id="videoclipes">	
					<div class="my-label">
						VÍDEOS
					</div>
				</div>
					<div class="row">
					<div class="col-sm-6">
						<iframe width="392" height="221" src="https://www.youtube.com/embed/VcByktP-mdE" frameborder="0" allowfullscreen class="video"></iframe>
						<div class="posicao-legenda">
							<p class="legenda-video">AC/DC - ThunderStruck</p>
						</div>
					</div>
					<div class="col-sm-6">
						<iframe width="392" height="221" src="https://www.youtube.com/embed/r3sARnlN-T0" frameborder="0" allowfullscreen class="video"></iframe>
						<div class="posicao-legenda">
							<p class="legenda-video">Scorpions - Rock You Like Hurricane</p>
						</div>
					</div>
				</div>
					<div class="row">
					<div class="col-sm-6">
						<iframe width="392" height="221" src="https://www.youtube.com/embed/DsmevZCy8CM" frameborder="0" allowfullscreen class="video"></iframe>
						<div class="posicao-legenda">
							<p class="legenda-video">Guns 'N Roses - Welcome to the Jungle - Live Rock in Rio 2</p>
						</div>
					</div>
					<div class="col-sm-6">
						<iframe width="392" height="221" src="https://www.youtube.com/embed/_CE-eNUW8vI" frameborder="0" allowfullscreen class="video"></iframe>
						<div class="posicao-legenda">
							<p class="legenda-video">Masterplan - Crimson Rider</p>
						</div>
					</div>
				</div>
			</section>
			<br>

		</div>	

		<div class="bg-grey">
			<br>
			<div class="page-header" id="contato">
				<div class="my-label">
					CONTATO
				</div>
			</div>

			<div class="container">
				<section>
					<div class="row">
						<div class="col-md-offset-4 col-md-4">
							<form>
						  		<div class="form-inline">
						    		<label class="nome">Nome: </label>
						    		<input type="email" class="form-control" id="email" placeholder="Digite seu nome">
						  		</div>
						  		<br/>
						  		<div class="form-inline">
						    		<label class="nome">Email: </label>
						    		<input class="form-control" id="email" placeholder="Digite seu E-mail">
						  		</div>
						  		<br/>
						  		<div class="form-inline">
						    		<label class="nome">Mensagem: </label>
						    		<textarea class="form-control" rows="3" id="mensagem" placeholder="Digite sua mensagem"></textarea>
						  		</div>
						  		<br/>
						  		<div class="col-md-offset-4 col-md-4">
						  			<button type="submit" class="btn btn-default" id="botao">Enviar</button>
								</div>
							</form>
						</div>
					</div>

				</section>
			</div>
		</div>

		<footer>
			<div class="section-container social-net-container">
				<a href="http://facebook.com"> 
					<i class="fa fa-facebook social-net-icon fa-facebook"></i>
				</a>
				<a href="http://twitter.com">
					<i class="fa fa-twitter-square social-net-icon fa-twitter"></i>
				</a>
				<a href="https://soundcloud.com/">
					<i class="fa fa-soundcloud social-net-icon fa-soundcloud"></i>
				</a>
				<a href="https://instagram.com/">
					<i class="fa fa-instagram social-net-icon fa-instagram"></i>
				</a>
			</div>		
		</footer>
		<!--<dialog id="popup-show1">
			<img src="../resources/images/show1.jpg">
			<button id="close1">Close</button>
		</dialog>-->
	</body>
	<!--<script>
		(function() {
			var dialog1 = document.getElementById('popup-show1');
			document.getElementById('show1').onclick = function() {
				dialog1.show();
			};
			document.getElementById('close1').onclick = function() {
				dialog1.hide();
			};
		})();
	</script>-->
</html>