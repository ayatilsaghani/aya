<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de Voiture Marrakech Centre-Ville | Avis Maroc</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background: #007bff;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .service, .vehicle {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            background: white;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #007bff;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .contact-info {
            margin-top: 20px;
            font-size: 1.1em;
        }
        @media (max-width: 600px) {
            nav {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Location de Voiture Marrakech</h1>
    <nav>
        <a href="#reservation">Réservation</a>
        <a href="#vehicules">Véhicules</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<div class="container">
    <section id="reservation">
        <h2>Réservez votre véhicule</h2>
        <p>Pour réserver, appelez-nous au <strong>0522 974 000</strong> ou <strong>+212 522 974 000</strong>.</p>
        <form>
            <label for="date-depart">Date de départ :</label>
            <input type="date" id="date-depart" name="date-depart" required>
            <label for="date-retour">Date de retour :</label>
            <input type="date" id="date-retour" name="date-retour" required>
            <button type="submit">Réserver</button>
        </form>
    </section>

    <section id="vehicules">
        <h2>Nos Véhicules</h2>
        <div class="vehicle">
            <h3>Véhicules Compacts</h3>
            <p>Idéals pour la ville, économiques et faciles à conduire.</p>
        </div>
        <div class="vehicle">
            <h3>Véhicules Spacieux</h3>
            <p>Parfaits pour les familles et les groupes.</p>
        </div>
        <div class="vehicle">
            <h3>4x4</h3>
            <p>Pour vos aventures hors route.</p>
        </div>
    </section>

    <section id="services">
        <h2>Services Offerts</h2>
        <div class="service">
            <h3>GPS et WiFi</h3>
            <p>Restez connecté et ne perdez jamais votre chemin.</p>
        </div>
        <div class="service">
            <h3>Assurances Complètes</h3>
            <p>Profitez de votre voyage en toute sérénité.</p>
        </div>
        <div class="service">
            <h3>Conducteur Supplémentaire</h3>
            <p>Partagez le volant pour plus de confort.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contactez-nous</h2>
        <p class="contact-info">Adresse : 137 Ave Mohammed V, Marrakech</p>
        <p class="contact-info">Téléphone : +212 522 688 962</p>
        <p class="contact-info">Horaires : Lundi à Samedi 08:00 - 19:00, Dimanche 08:00 - 12:00</p>
    </section>
</div>

<footer>
    <p>&copy; 2024 Avis Maroc. Tous droits réservés.</p>
</footer>

</body>
</html>