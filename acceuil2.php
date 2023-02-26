<?php
 require('actions/users/loginAction.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body>
    <br><br>

    <div class="container blockjeux">
    <?php include 'includes/navbf.php'; ?>

        <div class="row col-12">
            <div class="blockgauche"style="width:321px;heigth: 143px;">
            <p style="color:white;font-size:11px;margin:0px">BUILD AND FIGHT</p>
             <div class="row"> 
                    
                <div class="px-1" style="width: 78px;">
             
<img class="my-2" src="assets/img/imageacceuil/bienvenue_salute_accueil.jpg" alt="jeux de strategie en ligne gratuit"><br><a href="presentation-jeu-de-guerre-strategie-gratuit-en-ligne.html"><img src="assets/img/imageacceuil/bienvenue_savoir.gif" alt="jeux gratuit en ligne massivement multijoueur sur internet"></a>
</div>
<div class="" style="width:237px;">
<p style="color:white;font-size:11px;">Bienvenue dans la communauté Build & Fight, la référence des jeux en ligne !
Adoptez votre propre stratagème et entrez dans le monde feroce de B&F afin d'affronter seul, ou en équipe, des milliers de joueurs !
Nombreux seront vos adversaires tous plus rusés les uns que les autres...
Serez-vous à la hauteur ?</p>
</div>
</div> 

								<table cellpadding="0" cellspacing="0"><tbody><tr style="height:20px"><td></td></tr></tbody></table>
								<form name="form_logon"  method="post" style="margin:0px;">
								<table cellpadding="0" cellspacing="0" align="center">
									<tbody><tr>
										<td>
											<table>
												<tbody><tr>
													<td style="color:#FFFFFF; font-family:arial; font-size:11px">Mon pseudo:</td>
													<td><input id="us_log" type="text" size="15" name="pseudo" class="input_green" style="width:90px;"></td>
												</tr>
												<tr>
													<td style="color:#FFFFFF; font-family:arial; font-size:11px">Mot de passe:</td>
													<td><input type="password" size="15" name="password" class="input_green" style="width:90px;"></td>
												</tr>

											</tbody></table>
											<input type="hidden" name="submit_logon" value="ok">
										</td>
										<td><button type="submit" class="btn" name="validate"><img src="assets/img/imageacceuil/bouton_ok_02.jpg" alt=""></button>
 </td>
									</tr>
								</tbody></table>
								</form>
							</td>



            </div>

<div class="blockcentre "style="width: 220px;heigth: 143px;">
<img class="mt-2" src="assets/img/imageacceuil/tournoi.jpg" alt="" srcset="">

</div>



            <div class="blockdroit "style="width:321px;heigth: 143px;">

            </div>
        </div>

    </div>

</body>

</html>