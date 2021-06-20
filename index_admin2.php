<!DOCTYPE html>
<html lang="en">
<head>
    <title>MY IMPRESSION</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/logo_my impression.PNG" alt="PNG" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index_admin2.php?page=kategori">KATEGORI</a> 
            </li>
            <li>
                <a href="index_admin2.php?page=album">ALBUM</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=photo">PHOTO</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=post">POST</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=kembali">KEMBALI</a>
            </li>
            
            <li>
                <a href="index_admin2.php?page=logout">LOG OUT</a>
            </li>
            <li>
                <a href="index_admin2.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; Fazrul Umri Ritonga 2021
    </footer>
    </main>
</body>
</html>