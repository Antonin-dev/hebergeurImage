<?php


// ---------------------------------CLASS DISPLAY----------------------------------

class Display {

    public function displayHtml($lien) {

        $display = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div>
                <h1>Votre image</h1>
                <img src="' . $lien .'">
                <a href="' . $lien . '">Lien de votre image</a>
            </div>    
        </body>
        </html>';

        echo $display;
    }
}




