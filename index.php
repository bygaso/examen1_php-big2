<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: ;
            background-color: #e68fd9;
        }

        h1, h2 {
            color: #333;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin-left: 20px;
            text-align:left;
        }

       

        label {
            font-size: 15px;
            color: blue;
        }

    </style>
</head>
<body>

    <section>
        <h3>
            A PROPOS DE MOI <br>
            NOM : MANGA <br>
            PRENOM : SOLANGE GABRIELLA <br> 
            CODE :  220604 <br>
            CLASSE : BIG 2 <br>
        </h3>
    </section>
    <?php
echo '<h1>BIENVENUE SUR NOTRE SITE</h1>';
echo '<p>Dans cette page, nous vous demandons juste de sélectionner un exercice pour voir la correction correspondante.</p>';
?>


    <h2>Cliquer ci-dessous !</h2>
    <select id="exercice" onchange="window.location.href=this.value">
    <option value="" selected disabled>Selectionnez un exercice</option>

        <?php
        for ($i = 1; $i <= 18; $i++) {
            echo "<option value='exercice{$i}.php'>exercice {$i}</option>";
        }
        ?>
    </select>
</body>
</html>
