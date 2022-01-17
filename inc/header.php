<header>
    <div class="container">
            <div class="display">
                <p>Options d'affichage / accessibilité</p>
                
                <p> Thème:
                    <a href="#" id="dark">sombre</a>
                    <a href="#" id="contrast">contrasté</a>
                    <a href="#" id="light">clair</a>
                </p>
                
                <p>Interlignage:
                    <a href="#" id="simple">simple</a>
                    <a href="#" id="hight">augmenté</a>
                </p>
                
            </div>

            <div class="flex">

                <div class="logo">
                    <img src="assets/img/logo.svg" class="" alt="logo HiTech">
                    
                    <div class="text-logo">
                        <h1>HiTech.NET</h1>
                        <p class="description">Tout le matériel High-Tech</p>
                    </div>
                    
                </div>


                <form method="GET" action="index.php">
                    <input type="text" name="product" placeholder="Chercher un produit, une marque...">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <select name="search-nav" class="search-nav">
                        <option value="">Tous les rayons ...</option>
                        <option value=""><a href ="#">Ordinateurs</a></option>
                        <option value=""><a href ="#">Péripheriques & composants</a></option>
                        <option value=""><a href ="#">Téléphones</a></option>
                        <option value=""><a href ="#">Objets connecté</a></option>
                    </select>
                    <a href="#"><i class="fas fa-search"></i></a>
                    
                </form>
                
                <div class="account">
                    
                    <div class="shopping">
                       <a href="count.php" id="account_user"><i class="far fa-user-circle"></i>
                       <p>Mon compte</p></a>
                    </div>
                    
                    <div class="shopping">
                        <a href="shopping.php" id="shopping_list"><i class="fas fa-shopping-basket"></i>
                      <p>Mon panier</p></a>
                    </div>
                </div>

            </div>

        <nav>
            <!-- travail de l'autre groupe -->

        </nav>

</div>
 <?php include './inc/nav.php'?>
    </header>