<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>


  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="Accueil.html"><img src="LOGO_IDIX.png" width="100" height="45"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul style="font-size: 25px; font-weight: bold;" class="navbar-nav">
					<li class="nav-iteme">
						<a class="nav-link" href="Accueil.html">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Prestations.html">Prestations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="RÃ©alisations.html">PortFolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="entreprise.html">L'Entreprise</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="index.php">GDP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Contact.html">Contact</a>
					</li>
				</ul>
				<div class="container-fluid">
				<img src="instagram.png" width="25" height="25" style="margin: 5px">
				</div>
			</div>
		</div>
		</nav>


        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


                <div class="text-center">
                        <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                      
                </div>
            </div>
        </div>    

       

        

                                
    

            <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Changer mon avatar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                                <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                                <input type="file" name="avatar_file">
                                <br />
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>