<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nails</title>
    
    <?php include 'imports/headerImport.php'; ?>

</head>
<body>
    <nav>
        <a class="logo" href="#">Nails</a>
        <input type="checkbox" id="toggle_button">
        <label for="toggle_button" class="toggle_button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>
        <ul>
            <li><a href="#">Home</a></li>
            <li class="expandable_li">
                <input type="checkbox" id="products_checkbox">
                <label for="products_checkbox">Products</label>
                <ul class="dropdown">
                <li><a href="#">Anzeigen</a></li>
                <li><a href="#">Hinzufügen</a></li>
                </ul>
            </li>
            <li><a href="#">Logout</a></li>
            
            
        </ul>
    </nav>



    
</body>
</html>