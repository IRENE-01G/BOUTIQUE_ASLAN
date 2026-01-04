<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/aslan.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/Accueil.css') }}">
</head>
<body>
    <header>
<nav>
    <img src="{{ asset('assets/aslan.png') }}" alt="Logo Aslan Shop" width="100" height="100" style="border-radius: 140%">
    <ul>
        <li><a href="">Accueil</a></li>
        <li><a href="">Boutique</a></li>
        <li><a href="">Service</a></li>
        <li><a href="">Rendez-vous</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Panier</a></li>
        <button>Connexion</button>
    </ul>
</nav>
    </header><br><br><br>
<section>
    <div>
    <img src="{{ asset('assets/yu.jpg') }}" alt="Image Accueil" width="600" height="600" style="border-radius: 50px 30px 50px 30px; margin-top: 70px; box-shadow: 10px 10px 20px grey; margin-bottom: 70px; margin-left: 50px;">
    </div>

 <div class="texte">
    <h1>Beauté <br> Africaine <br>Redéfinie </h1> <br>
    <p>Découvrez notre gamme exclusive de produits de beauté africains, conçus pour sublimer votre peau et vos cheveux avec des ingrédients naturels et authentiques.</p> <br><br><br><br>
    
    <button type="submit">Explorer la Boutique</button>
    <button class="rendez-vous" type="submit" >Prendre un Rendez-vous</button>

</div>
</section><br><br><br>

<div class="promo">
<div class="collection">
<p>Notre Collection</p>
<h1>Explorez Nos Univers</h1><br><br>
<div class="cards">
    <div class="card">
        <img src="{{ asset('assets/lp.jpg') }}" alt="Soin de la Peau" width="300" height="300" style="border-radius: 20px;"><br><br>
        <h2>Soin de la Peau</h2><br>
        <h3>Découvrez nos produits naturels pour une peau <br>éclatante et en bonne santé.</h3><br>
    </div>
    

    <div class="card">
        <img src="{{ asset('assets/natte.jpg') }}" alt="Maquillage" width="300" height="300" style="border-radius: 20px;"><br><br>
        <h2>Tresse stich  </h2><br>
       <h3>Des produits de maquillage inspirés par la beauté<br> africaine pour un look unique.</h3><br>
    </div>
     <div class="card">
        <img src="{{ asset('assets/natte.jpg') }}" alt="Maquillage" width="300" height="300" style="border-radius: 20px;"><br><br>
        <h2>Tresse stich </h2><br>
       <h3>Des produits de maquillage inspirés par la beauté<br> africaine pour un look unique.</h3><br>
    </div>

</div>
</div><br><br><br>

<div class="service">
    <div class="info-service">

        <h1>Tressage professionnel <br> sur rendez-vous</h1><br>
        <p>Réservez votre séance de tressage avec nos experts pour un style impeccable et personnalisé.</p><br><br>
        <ol>✅ Expertise de 10+ ans</ol><br>
        <ol>✅ Produits de qualité</ol><br>
        <ol>✅ Ambiance conviviale</ol><br><br>
      <button type="submit" style="margin-right: 190px;">🗓 Reservez maintenant</button>
    </div>
    <div class="image-service">
        <img src="{{ asset('assets/twist.jpg') }}" alt="Service de Tressage" width="500" height="500" style="border-radius: 30px; box-shadow: 10px 10px 20px grey; margin-left: 50px;">
      
</div>
</div>

</div><br><br><br>

<div class="coup">
    <h1>Nos Coups de Coeur</h1><br><br>

    </div>
    

</body>
</html>
