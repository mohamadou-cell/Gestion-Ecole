
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="inscription_employe.css">
   
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../inscription_employe.css">

    <title>Formulaire Inscription Eleves</title>
</head>
<body>
    <h1 class="text-center" style="margin-top:30px;margin: bottom 20px;">INSCRIPTION EMPLOYE </h1>
    <div id="forme" class="container"  >
        <form action="Recuperation_Employe.php" method="post" style="margin-top:100px; " >
    <div class="row form-inline mb-5 form" >
            <label for="prenom" class="form-label col-lg-1"  >PRENOM:</label>
            <input type="text" name="prenom" class="form-control col-lg-4" value="prenom" placeholder="votre prenom">
            <label for="nom" class="form-label col-lg-1" >NOM:</label>
            <input type="text" name="nom" class="form-control col-lg-4"  value="nom"  placeholder="votre nom">
    </div>
    <div class="row form-inline mb-5">
        <label for="adrese" class="form-label col-lg-1" >ADRESSE:</label>
        <input type="text" class="form-control col-lg-4"  value="adresse"  placeholder="votre adresse">
        <label for="fonction" class="form-label col-lg-1">FONCTION:</label>
        <input type="text" name="fonction" class="form-control col-lg-4"  value="fonction"  placeholder="votre adresse">     
    </div>
    <div class="row form-inline mb-5">
     <label for="email" class="form-label col-lg-1" >EMAIL:</label>
     <input type="text" class="form-control col-lg-4"  value="email"  placeholder="votre email">
     <label for="telephone_employe" class="form-label col-lg-1">TELEPHONE:</label>
     <input type="text" class="form-control col-lg-4"  value="tephone_employe"  placeholder="votre telephone">
    </div>
    <div class="row form-inline mb-5">
        <label for="sexe" class="form-label col-lg-1">SEXE:</label>
    <select name="sexe" class="form-control col-lg-4">
         <option value="0"></option>
        <option value="femme">FEMME</option>
        <option value="masculin">MASCULIN</option>
    </select>
    <label for="nationalite" class="form-label col-lg-1" >NATIONALITE:</label>
     <input type="text" class="form-control col-lg-4"  value="nationalite"  placeholder="nationalite">
    </div>
    <div class="row form-inline mb-5">
         <label for="civilite" class="form-label col-lg-1">CIVILITE:</label>
        <select name="civilite" id="civilite"  class="form-control col-lg-4" name="civilite" placeholder="civilite">
            <option value="0"></option>
        <option value="1">Madame</option>
            <option value="2">Monsieur</option>
         </select>
         <label for="matiere" class="form-label" >MATIERE:</label>
         <input type="text"  class="form-control col-lg-4"  value="nationalite">
         
    </div> 
        <div class="row form-inline mb-5">
            <label for="date" class="form-label col-lg-1">DATE DE NAISSANCE:</label>
            <input type="date" class="form-control col-lg-4"  placeholder="date_naissance">
            <label for="dateIns" class="form-label col-lg-1">DATE D'INSCRIPTION:</label>
            <input type="date" class="form-control col-lg-4"  placeholder="date_inscription">
        </div>  

   <div class="text-center"> <button type="submit"  style="background:blue;border-radius:1rem;">ENVOYER</button></div>
        </form>
    </div>
    <script>
        var b_prenom = false; var b_nom= false; var b_adrese= false;var b_fonction = false; var b_email= false; var b_telephone= false;
        var b_sexe = false; var b_civilite= false;var b_date = false; var b_dateIns= false; 
        function envoyer(){
    if (b_prenom =true && b_nom=true &&  b_adrese=true &&  b_fonction=true && b_email =true &&  b_telephone=true &&   b_sexe =true &&   b_sexe =true ) {
        var  b_nationalite = true;  
    }
            }
    </script>

    <style>
        .boutton{
    margin-top: 20px;

    justify-content: center;
    
    border-radius:1rem;
    background-color: cornflowerblue;
}
    </style>
</body>
</html> 