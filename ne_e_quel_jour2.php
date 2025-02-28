<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour de naissance</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .result {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        button {
            padding: 10px 20px;
            background: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }
        button:hover {
            background: #ff3b2f;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-calendar-alt icon"></i> Quel jour de la semaine êtes-vous né(e) ?</h1>

        <h2 class="result">
            <?php
            {
                $prenom = $_POST['prenom'];
                $jour = $_POST['jour'];
                $mois = $_POST['mois'];
                $annee = $_POST['annee'];
            }

            if ($mois < 3) {
                $result = ((int)((23 * $mois) / 9) + $jour + 4 + $annee + (int)(($annee - 1) / 4) - (int)(($annee - 1) / 100) + (int)(($annee - 1) / 400)) % 7;
            } else {
                $result = ((int)((23 * $mois) / 9) + $jour + 2 + $annee + (int)(($annee) / 4) - (int)(($annee) / 100) + (int)(($annee) / 400)) % 7;
            }

            $jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
            echo "$prenom, vous êtes né(e) un $jours[$result].";
            ?>
        </h2>

        <button onclick="history.back()">Retour</button>
    </div>
</body>
</html>