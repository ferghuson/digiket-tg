<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<title>Digiket</title>
	<meta name="description" content="Digiket">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="Digiket">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

    <?php include_once 'link.php'; ?>

	<meta name="theme-color" content="#fafafa">
</head>

<body>

<?php include_once 'header.php'; ?>
	
	<section class="content-wrapper"  data-aos="fade-right">
		<div class="home-banner portfolio">
			<div class="left-text">
				<div class="d-flex flex-column">
					<div class="soumission"><p>Soumission rapide</p></div>
					<div class="text">
						<p>Via ce formulaire, dites-nous les spécificités de votre projet.</p>
					</div>
				</div>
			</div>
			<div class="right-side devis">
                <h6>5 - Dites-nous ce que nous avons manqué  ?</h6>
                    
                <form>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12">
								<label class="form-label" for="textAreaExample" >Commentaire</label>
								<textarea class="form-control" id="textAreaExample1" rows="4" ></textarea>
								
                               
                            </div>

                        </div>
                    </div>
                    
                    <a href="formulaireDevis.php" class="btn btn-primary">Envoyer</a>
                </form>
                 <!--<a href="devis-1.html" class="regular-button">SUIVANT</a>-->
                    
			</div>
		</div>
	</section>


<?php include_once 'script.php'; ?>
</body>
</html>