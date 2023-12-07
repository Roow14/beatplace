<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lateral</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu {
            width: 250px;
            height: 100%;
            background-color: #333;
            position: fixed;
            left: 0;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .menu a {
            padding: 15px 15px 15px 30px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #f1f1f1;
        }

        ul {
        display: inline;
    }
    </style>
</head>
<body>

<nav class="menu">
<ul class="list-unstyled components">
    <a href="/beatplace/index.php">BEAT-PLACE</a>
        <a href="">GÊNERO</a>
        <li><a href="./pop.php">POP</a></li>
        <li><a href="./rock.php">ROCK</a></li>
        
        
        
</ul>
    </nav>

    

</body>
</html>