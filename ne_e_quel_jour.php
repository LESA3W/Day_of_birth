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
            font-size: 18px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        input[type="text"]:focus, select:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: none;
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
        .click-effect {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
            animation: clickAnimation 0.5s ease-out;
        }
        @keyframes clickAnimation {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(3);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-calendar-alt icon"></i> Quel jour de la semaine êtes-vous né(e) ?</h1>

        <form method="POST" action="ne_e_quel_jour2.php">
            <div class="form-group">
                <label for="prenom">Votre prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>

            <h2>Votre date de naissance SVP ?</h2>

            <div class="form-group">
                <label for="jour">Jour du mois :</label>
                <select id="jour" name="jour">
                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="mois">Mois :</label>
                <select id="mois" name="mois">
                    <option value="1">Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="annee">Année :</label>
                <select id="annee" name="annee">
                    <?php for ($i = 1925; $i <= 2025; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>

    <script>
        document.addEventListener('click', function (e) {
            const clickEffect = document.createElement('div');
            clickEffect.className = 'click-effect';
            clickEffect.style.left = `${e.clientX - 10}px`;
            clickEffect.style.top = `${e.clientY - 10}px`;
            document.body.appendChild(clickEffect);

            setTimeout(() => {
                clickEffect.remove();
            }, 500);
        });
    </script>
</body>
</html>