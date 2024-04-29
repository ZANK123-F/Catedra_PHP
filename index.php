<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas de Comidas</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        .logo img {
            width: 150px;
            height: auto; 
            border-radius: 80%
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo"><img src="img/logo.png" alt="Logo"></a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="Sobre_Nosotros.php">Sobre Nosotros</a></li>
                    <li><a href="Iniciarsesion.php">Iniciar Sesion</a></li>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Menu Principal</h1>
                <p>
                    Comida Especial para los estudiantes
                </p>
            </div>
        </div>
    </header>

    <section class="information container">
        <div class="information-content">
            <div class="information-1">
                <div class="information-c1">
                    <h3>Comedores Norte</h3>
                    <p>
                        Disfruta de las delicias de la UDB
                    </p>
                    <a href="javascript:void(0)" onclick="mostrarAlerta()" class="btn-1">Comedor 1</a>
                    <a href="javascript:void(0)" onclick="mostrarAlerta()" class="btn-1">Comedor 2</a>
                </div>
                <div class="information-a1">
                    <img src="img/cafeteria2.jpg" alt="">
                </div>
            </div>
            <div class="information-2">
                <div class="information-b1">
                    <img src="img/cafeteria1.png" alt="">
                </div>
                <div class="information-c1">
                    <h3>Comedores Sur</h3>
                    <p>
                        Disfruta de las delicias de la UDB
                    </p>
                    <a href="javascript:void(0)" onclick="mostrarAlerta()" class="btn-1">Comedor 3</a>
                    <a href="javascript:void(0)" onclick="mostrarAlerta()" class="btn-1">Comedor 4</a>
                </div>
            </div>
        </div>
    </section>

    <Footer class="footer">
        <div class="footer-content container"> 
            <div class="link"> 
                <a href="#" class="logo"><img src="img/logo.png" alt="Logo"></a>
            </div>   
            <div class="link">
                <ul>
                    <li><a href="https://www.instagram.com/udbelsalvador/?hl=es">Instagram</a></li>
                    <li><a href="https://www.facebook.com/UDBelsalvador/">Facebook</a></li>
                    <li><a href="https://twitter.com/">Twitter</a></li>
                    <li><a href="https://web.whatsapp.com/">Whatsapp</a></li>
                    <li><a href="https://www.udb.edu.sv/udb/">Pagina</a></li>
                </ul>
            </div>
        </div>
    </Footer>

    <script>
        function mostrarAlerta() {
            alert("No puedes acceder a la información de este comedor si no te registras primero...Bendiciones");
        }
    </script>
</body>
</html>
