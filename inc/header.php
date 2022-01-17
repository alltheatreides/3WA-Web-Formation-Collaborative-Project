<header >
    <div class="container">
        <div class="display">
            <p>
                Options d'affichage/accessibilité
            </p>
            <p> Thème :
                <a href="#" id="dark">sombre</a>
                <a href="#" id="contrast">contrasté</a>
                <a href="#" id="light">clair</a>
            </p>
            <p> Interlignage :
                <a href="#" id="simple">simple</a>
                <a href="#" id="hight">augmenté</a>
            </p>
        </div>    

        <div class="flex">
            <div class="logo">
                <img src="assets/img/logo.svg" class="logo_hitech" alt="logo HiTech">
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
                    <option value="">Ordinateurs</option>
                    <option value="">Péripheriques & composants</option>
                    <option value="">Téléphones</option>
                    <option value="">Objets connectés</option>
                </select>
                <a href="#" id="search"><i class="fas fa-search"></i></a>
            </form>
                
            <div class="account">
                <div class="shooping">
                        
                    <a href="account.php" id="account_user">
                        <i class="far fa-user"></i>
                        <p>Mon compte</p>
                    </a>
                </div>
                    
                <div class="shooping">
                    <a href="shooping.php" id="shooping_list">
                        <i class="fas fa-shopping-basket"></i>
                        <p>Mon panier</p>
                    </a>
                </div>
            </div>
        </div>
  
  <?php include './inc/nav.php'?>
    </div>        
</header>
    
        
 