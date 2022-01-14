<!-- Trigger/Open The Modal -->
<button id="myBtn">Mon compte</button>
<button id="myBtn2">Panier</button>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content START -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Mon compte</h2>
        <form class="fields">
            <legend>J'ai déjà un compte</legend>
            <div class="field">
                <label>Mon adresse email</label>
                <input class="input" type="mail" name="mail" />
            </div>
            <div class="field">
                <label>Mon mot de passe</label>
                <input class="input" type="password" name="password" />
            </div>
            <div class="field">
                <a href="#" class="connect">Se connecter</a>
                <a href="#" id="mdpOublie">J'ai oublié mon mot de passe</a>
            </div>
        </form>

        <form class="fields">
            <legend id="noAcc">Je n'ai pas de compte</legend>
            <a href="#" class="connect">Créer un compte</a>
        </form>
    <!-- Modal content END -->
    </div>
</div>


<div id="myModal2" class="modal2">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close2">&times;</span>
        <h2>Mon panier</h2>
        <div>Aucun article</div>
    </div>
</div>