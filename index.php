<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
    <body>
        <div class="wrapper">
        <header class="site-header">
            <h1>Quiz</h1>
        </header>

        <main>
            <?php 
            //initialisieren
            $currentPage = 0;
        

            //aktuelle seite bestimmen
            if (array_key_exists('page', $_GET)) {
                $currentPage = $_GET['page'];
            }

            $questions = [
                'Eis ist gefrorenes',
                'Bäume sind',
                'Der Himmel am Tag hat die Farbe'

            ];

            // array mit den antworten
            
            /*
            jeder eintrag in einem array kann ein array sein.
            $questions[0] erhält seine antworten aus $answers[0] usw.
            */
            
            $answers = [

                ['holz', 'wasser', 'glas', 'gelee'],
                ['tiere', 'pflanzen', 'gemüse', 'Fahrzeuge'],
                ['rot', 'gelb', 'blau', 'orange'],

            ];

            // array mit den korrekten antworten
            $correctAnswers = [
                'Wasser',
                'Pflanzen',
                'Blau'

            ];

            
            ?>

            <!-- unten stehende ausgabe ist eine kurzform für : 
                <?php echo $questions[$currentPage]; ?> -->

            <p><?= $questions[$currentPage] ?></p>


            <ol>

            <?php 
            
            // foreach schleife über die antworte der aktuellen seite

            // den link wie im beispiel unten anhand der aktuellen 
            ?>
<!--
                <li><a href="./index.php?answer=gelee">Gelee</a></li>
                <li><a href="./index.php?answer=wasser">Wasser</a></li>
                <li><a href="./index.php?answer=holz">Holz</a></li>
                <li><a href="./index.php?answer=glas">Glas</a></li> -->
            </ol>

        <div class="pagination">
            <?php 
                $prevPage = 0;
                $nextPage = 0;

                if ($currentPage > 0) {
                    $prevPage = $currentPage -1;
                }
            
                if ($currentPage < count($questions) -1) {
                    $nextPage = $currentPage + 1;
                }
            ?>
                <a href="<?='index.php?page=' . $prevPage ?>" class="-button button-primary">vorherige Frage</a>

                <a href="<?='index.php?page=' . $nextPage ?>" class="-button button-primary">nächste Frage</a>

        </div>
     </main>
  </div>
</body>
</html>