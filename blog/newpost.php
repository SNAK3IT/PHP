<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>New Posts</title>
    </head>
    <body>
        <form action="savepost.php" method="post">
            <p>
            <input type="text" name="title" placeholder="Titulo" require>
            </p>
            <p>
                <textarea name="body" cols="30" rows="10" placeholder="Body"></textarea>
            </p>
            <p>
              <input type="submit" value="Guardar">  
            </p>
        </form>        
    </body>
</html>