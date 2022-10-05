<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>projet gestion ecole</title>
    
</head>
<body>
    <div id="formul" >
    <form action="Recuperation_Inscription.php" method="post" id="formulaire" >
        
    <div>
        <label for="prenom" class="form-label">PRENOM</label>
        <input type="text" name="prenom" class="form-control"  placeholder="votre prenom">
    </div>
    <div>
        <label for="nom" class="form-label">NOM</label>
        <input type="text" name="nom" class="form-control" placeholder="votre nom">
    </div>
    <div>
        <label for="email" class="form-label">EMAIL</label>
        <input type="text" name="email" class="form-control" placeholder="votre email"> 
    </div>
    <div>
        <label for="adresse" class="form-label">ADRESSE</label>
        <input type="text" name="adresse" class="form-control" placeholder="votre adresse">
    </div>
    <div>
        <label for="nom du tuteur" class="form-label">NOM DU TUTEUR</label>
        <input type="text" name="nom_tuteur" class="form-control" placeholder="nom du tuteur">
    </div>
    <div>
        <label for="telephone du tuteur" class="form-label">TELEPHONE DU TUTEUR</label>
        <input type="text" name="telephone_tuteur" class="form-control" placeholder="numero telephone du tuteur">
    </div>
    <div>
        <label for="date_naissance" class="control-label" >DATE DE NAISSANCE</label>
        <input type="date" name="date_naissance" class="form-control" > 
    </div>
    <div>
        <label for="nationalite" class="control-label" >NATIONALITE</label>
        <input type="text" name="nationalite" class="form-control"placeholder="votre nationalite"> 
    </div>
    <div>
        <label for="genre" name="genre">GENRE</label>
    <select class="form-control" >
        <option value="0"></option>
        <option value="masculin">MASCULIN</option>
        <option value="feminin">FEMININ</option>
      </select>
    </div>
    <button class="boutton" type="submit">ENVOYER</button>
</form>
</div>
<style>
    #formul{
        display: flex;
        justify-content: center;
        line-height: 40px;
    }
#formulaire{
   
    width: 30%;
    
}
.commentaire{
width: 400px;
height: 200px;
margin-top: 20px;

}
.boutton{
    margin-top: 20px;
    display: flex;
    justify-content: center;
    border-radius:1rem;
    background-color: cornflowerblue;
}
.form-control{
    border: 1px solid black; 
}
</style>


</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Formulaire Inscription Eleves</title>
</head>
<body>
    <h1 class="text-center" style="margin-top:30px;margin: bottom 20px;">INSCRIPTION EMPLOYE </h1>
    <div id="forme" class="container"  >
        <form action="" method="" style="margin-top:100px; " >
    <div class="row form-inline mb-5 form" >
            <label for="prenom" class="form-label col-lg-1"  >PRENOM:</label>
            <input type="text" name="prenom" class="form-control col-lg-4" placeholder="votre prenom">
            <label for="nom" class="form-label col-lg-1" >NOM:</label>
            <input type="text" name="nom" class="form-control col-lg-4"placeholder="votre nom">
    </div>
    <div class="row form-inline mb-5">
        <label for="adrese" class="form-label col-lg-1" >ADRESSE:</label>
        <input type="text" class="form-control col-lg-4"  placeholder="votre adresse">
        <label for="fonction" class="form-label col-lg-1">FONCTION:</label>
        <input type="text" name="fonction" class="form-control col-lg-4" placeholder="votre adresse">     
    </div>
    <div class="row form-inline mb-5">
     <label for="email" class="form-label col-lg-1" >EMAIL:</label>
     <input type="text" class="form-control col-lg-4" placeholder="votre email">
     <label for="telephone_employe" class="form-label col-lg-1">TELEPHONE:</label>
     <input type="text" class="form-control col-lg-4" placeholder="votre telephone">
    </div>
    <div class="row form-inline mb-5">
        <label for="sexe" class="form-label col-lg-1"></label>
    <select name="sexe" class="form-control col-lg-4">
        <option value="femme">FEMME</option>
        <option value="masculin">MASCULIN</option>
    </select>
    <label for="nationalite" class="form-label col-lg-1">NATIONALITE:</label>
     <input type="text" class="form-control col-lg-4"  placeholder="nationalite">
    </div>
   <div class="text-center"> <button type="submit"  style="background:blue;border-radius:1rem;">ENVOYER</button></div>
        </form>
    </div>
    
</body>
</html> -->