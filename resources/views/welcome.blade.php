<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WE SHARE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fdfdfd;
                font-family: 'Raleway', sans-serif;
                margin: 0;
                text-align: center;
                background-color: #151515;
            }

            .box1 {
                padding: 20px;
            }

            .twhite {
                color: #FCFCFC;
            }
        </style>
    </head>
    <body>
        <div class="box1 twhite">
           <div>
               
            <h1>- WE SHARE -</h1>
            <br>
            <p>Your File : </p>
            <input type="file" name="yourfile">
            <br><br>
            <p>Email du destinataire : </p><input type="email" name="email">

            <br><br>
            
            <input type="button" name="ok" value="ENVOYER">

           </div> 
        </div>

    </body>
</html>
