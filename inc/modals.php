<link rel="stylesheet" href="./css/modals.css" type="text/css" />



<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Mon compte</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" onclick="closeModal('myModal')">&times;</span>
    <h2>Mon compte</h2>
    <form>
        <legend>J'ai déjà un compte</legend>
        
        <label>Mon adresse email</label>
        <input class="input" type="mail" name="mail"/>
        
        <label>Mon mot de passe</label>
        <input class="input" type="password" name="password"/>
        
        <a href="#" class="connect">Se connecter</a>
        <a href="#" id="mdpOublie">J'ai oublié mon mot de passe</a>
    </form>
    
    <form>
        <legend>Je n'ai pas de compte</legend>
        <a href="#" class="connect">Créer un compte</a>
    </form>
    
  </div>

</div>

<script type="text/javascript" src="./js/modals.js"></script>