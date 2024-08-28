<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportShop</title>
    <style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 5;
            background-color: #f3f4f6;
            color: #000000;
        }
        header {
            background-color: #000000;
            color: rgb(255, 255, 255);
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #000000;
            color: rgb(0, 0, 0);
            overflow: hidden;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav a {
            color: rgb(255, 255, 255);
            padding: 10px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .banner {
            background-image: url('https://i.pinimg.com/564x/6c/fe/e4/6cfee4360d00209f65879b12ef4fe586.jpg');
            height: 400px;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        .products-container {
            flex: 3;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }
        .product-card img {
            max-width: 100%;
            border-radius: 8px;
        }
        .product-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 16px;
            color: #777;
        }
        .product-card .new-label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #4CAF50;
            color: white;
            padding: 5px;
            font-size: 12px;
            border-radius: 5px;
        }
        .product-card .buttons {
            margin-top: 10px;
        }
        .product-card .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            margin-bottom: 5px;
        }
            .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 220px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            position: relative;
        }
        .product-card:hover {
            transform: scale(1.05);
        }

        .btn-cart {
            background-color: #000000;
            color: rgb(255, 255, 255);
        }
       
        .btn-buy {
            background-color: #000000;
            color: rgb(255, 255, 255);
        }

        footer {
            background-color: #000000;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            width: 100%;
        }
        .cart-icon {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 1000;
}

.cart-icon img {
    width: 30px;
    height: 30px;
    filter: brightness(0) invert(1); /* Cambia el color del ícono a blanco */
}
        /* Estilos de búsqueda */
        .search-container {
            display: flex;
            align-items: center;
        }
        #searchInput {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        #searchButton {
            padding: 6px 10px;
            font-size: 16px;
            border: none;
            background-color: #000000;
            color: white;
            cursor: pointer;
            margin-left: 5px;
            border-radius: 4px;
        }
        #searchButton:hover {
            background-color: #555;
        }

     .search-container {
        display: flex;
        align-items: center;
        flex: 1;
    }
    .search-container input[type="text"] {
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-right: 10px;
    }
    .search-container button {
        padding: 5px 10px;
        font-size: 16px;
        border: none;
        background-color: #000000;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }
    .search-container button img {
        width: 20px;
        height: 20px;
    }
    .login-button {
        display: flex;
        align-items: center;
        margin-left: 10px;
        background: none;
        border: none;
        cursor: pointer;
    }
    .login-button img {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }
</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body>
    <header>
        <h1>SportShop</h1>
    </header>

    <nav>
        <div>
            <a href="tiendadep.html">Inicio</a>
            <a href="productos-escolares.html">Escolar</a>
            <a href="productos-nuevos.html">Lo Más Nuevo</a>
            <a href="productos-hombre.html">Hombre</a>
            <a href="productos-mujer.html">Mujer</a>
            <a href="marcas.html">Marcas</a>
            <a href="ofertas.html">Ofertas</a>
            <a href="electronicos.html">Electrónicos</a>
        </div>
        <header>
            <div class="search-container">
                <input type="text" placeholder="Buscar productos...">
                <button type="button">Buscar</button>
                <button class="login-button" onclick="window.location.href='iniciar-sesion.html'">
                    <img src="https://i.pinimg.com/564x/8e/0c/fa/8e0cfaf58709f7e626973f0b00d033d0.jpg" alt="Iniciar sesión">
                    <span>Iniciar sesión</span>
                </button>
            </div>
    </nav>

    <div class="banner">
        <!-- La imagen de fondo se maneja con CSS -->
    </div>
        </div>
        <div class="products-container" id="productsContainer">
            <div class="products-container" id="productsContainer">
                <!-- Productos aquí -->

                <div class="product-card" data-name="Tenis Puma Carina 2.0">
                    <span class="new-label">Nuevo</span>
                    <img src="https://i.pinimg.com/564x/4f/39/f4/4f39f4541803d2c2caa6523807bd3183.jpg" alt="Producto 1">
                    <h3>Tenis Puma Carina 2.0</h3>
                    <p>$1,999.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Bolso Puma Phase">
                    <span class="new-label">Nuevo</span>
                    <img src="https://www.digitalsport.com.ar/files/products/62d04943bb594-528823-500x500.jpg" alt="Producto 2">
                    <h3>Bolso Puma Phase</h3>
                    <p>$349.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Playera Adidas Essentials Mujer">
                    <img src="https://resources.sears.com.mx/imgsplaza-sears/sears/?tp=p&id=773117&t=original&scale=700&qlty=80" alt="Producto 3">
                    <h3>Playera Adidas Essentials Mujer</h3>
                    <p>$399.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Playera Adidas Future Icon">
                    <img src="https://i.pinimg.com/564x/a1/11/88/a11188800a6e0a7a32dc3896ce8fcba5.jpg" alt="Producto 4">
                    <h3>Playera Adidas Future Icon</h3>
                    <p>$799.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Short Puma Essentials Cargo Hombre">
                    <img src="https://i.pinimg.com/564x/db/da/a3/dbdaa31f1a75b22b427b113f3cf93d5b.jpg" alt="Producto 5">
                    <h3>Short Puma Essentials Cargo Hombre</h3>
                    <p>$649.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <!-- Nuevos productos -->
                <div class="product-card" data-name="Tenis Puma Carina 2.0">
                    <span class="new-label">Nuevo</span>
                    <img src="https://i.pinimg.com/736x/10/21/ca/1021cab2dee47d20aa24446e8b7acf70.jpg" alt="Producto 6">
                    <h3>Tenis Puma Carina 2.0</h3>
                    <p>$1,999.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Leggings Adidas 3-Stripes">
                    <img src="https://i.pinimg.com/564x/62/4b/ea/624bea94532e20fe4b5a46f5684b288e.jpg" alt="Producto 7">
                    <h3>Leggings Adidas 3-Stripes</h3>
                    <p>$549.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Chaqueta Puma Amplified">
                    <img src="https://i.pinimg.com/564x/9a/64/27/9a6427465599733aa90e010d5fc7190d.jpg" alt="Producto 8">
                    <h3>Chaqueta Puma Amplified</h3>
                    <p>$1,299.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Shorts Nike Flex">
                    <img src="https://i.pinimg.com/564x/4b/78/c1/4b78c197e92ecc2ac444caf6095ca411.jpg" alt="Producto 9">
                    <h3>Shorts Nike Flex</h3>
                    <p>$799.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Sudadera Puma Essentials">
                    <img src="https://i.pinimg.com/736x/ca/af/da/caafdac3c3fe3a42cad0e007d9fed395.jpg" alt="Producto 10">
                    <h3>Sudadera Puma Essentials</h3>
                    <p>$899.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>s
                </div>
                <div class="product-card" data-name="Gorra Adidas Classic">
                    <img src="https://i.pinimg.com/564x/38/35/97/38359732fc0f6b918014a19fde1a84f5.jpg" alt="Producto 11">
                    <h3>Gorra Adidas Classic</h3>
                    <p>$299.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Camisa Nike Team">
                    <img src="https://i.pinimg.com/564x/83/05/74/830574fa825406de73dbd7f3119ea222.jpg" alt="Producto 12">
                    <h3>Camisa Nike Team</h3>
                    <p>$399.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Shorts Adidas Supernova">
                    <img src="https://i.pinimg.com/564x/be/9e/35/be9e35be1fc708eb6e18fb0449b7de59.jpg" alt="Producto 13">
                    <h3>Shorts Adidas Supernova</h3>
                    <p>$649.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Chaqueta Nike Sportswear">
                    <img src="https://i.pinimg.com/564x/80/85/e6/8085e6cdd5990145b04b3150a047072e.jpg" alt="Producto 14">
                    <h3>Chaqueta Nike Sportswear</h3>
                    <p>$1,199.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Tenis Adidas Ultraboost">
                    <img src="https://i.pinimg.com/564x/0c/4b/be/0c4bbed304a2c59d92a3017dd1c3fe2b.jpg" alt="Producto 15">
                    <h3>Tenis Adidas Ultraboost</h3>
                    <p>$2,799.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Bolso Nike Heritage">
                    <img src="https://i.pinimg.com/564x/45/da/a9/45daa9bc08f4c0edd5a69e04f47e5951.jpg" alt="Producto 16">
                    <h3>Bolso Nike Heritage</h3>
                    <p>$399.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Camisa Puma Performance">
                    <img src="https://i.pinimg.com/564x/ba/8e/cf/ba8ecfb56b0c0e17b0a2d02517c8928c.jpg" alt="Producto 17">
                    <h3>Camisa Puma Performance</h3>
                    <p>$499.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Short Nike Pro">
                    <img src="https://i.pinimg.com/564x/8f/db/9d/8fdb9d770b21d22ae978dcfbb5937b89.jpg" alt="Producto 18">
                    <h3>Short Nike Pro</h3>
                    <p>$549.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Tenis Adidas NMD">
                    <img src="https://i.pinimg.com/736x/e9/19/2a/e9192a359e911429ba7f8cb4c7058e86.jpg" alt="Producto 19">
                    <h3>Tenis Adidas NMD</h3>
                    <p>$2,299.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Chaqueta Puma Future">
                    <img src="https://i.pinimg.com/564x/14/11/2f/14112fc1bd8c1bb23ba995cbb8d33483.jpg" alt="Producto 20">
                    <h3>Chaqueta Puma Future</h3>
                    <p>$1,099.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
                <div class="product-card" data-name="Gorra Nike Dri-FIT">
                    <img src="https://i.pinimg.com/564x/90/a6/29/90a629cd7d76214a60f85efff2a310e8.jpg" alt="Producto 21">
                    <h3>Gorra Nike Dri-FIT</h3>
                    <p>$299.00 MXN</p>
                    <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
                </div>
            <div class="product-card" data-name="Tenis Puma Carina 2.0">
                <span class="new-label">Nuevo</span>
                <img src="https://i.pinimg.com/564x/4f/39/f4/4f39f4541803d2c2caa6523807bd3183.jpg" alt="Tenis Puma Carina 2.0">
                <h3>Tenis Puma 3.0</h3>
                <p>$1,999.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Bolso Puma Phase">
                <span class="new-label">Nuevo</span>
                <img src="https://www.digitalsport.com.ar/files/products/62d04943bb594-528823-500x500.jpg" alt="Bolso Puma Phase">
                <h3>Bolso Puma Phase</h3>
                <p>$349.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Playera Adidas Essentials Mujer">
                <img src="https://resources.sears.com.mx/imgsplaza-sears/sears/?tp=p&id=773117&t=original&scale=700&qlty=80" alt="Playera Adidas Essentials Mujer">
                <h3>Playera Adidas Essentials Mujer</h3>
                <p>$399.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Playera Adidas Future Icon">
                <img src="https://i.pinimg.com/564x/a1/11/88/a11188800a6e0a7a32dc3896ce8fcba5.jpg" alt="Playera Adidas Future Icon">
                <h3>Playera Adidas Future Icon</h3>
                <p>$799.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Short Puma Essentials Cargo Hombre">
                <img src="https://i.pinimg.com/564x/db/da/a3/dbdaa31f1a75b22b427b113f3cf93d5b.jpg" alt="Short Puma Essentials Cargo Hombre">
                <h3>Short Puma Essentials Cargo Hombre</h3>
                <p>$649.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <!-- Nuevos productos -->
            <div class="product-card" data-name="Tenis Puma Carina 2.0">
                <span class="new-label">Nuevo</span>
                <img src="https://i.pinimg.com/736x/10/21/ca/1021cab2dee47d20aa24446e8b7acf70.jpg" alt="Tenis Puma Carina 2.0">
                <h3>Tenis Puma Carina 2.0</h3>
                <p>$2,299.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Camisa Nike Dry Fit">
                <img src="https://i.pinimg.com/564x/fa/6f/b9/fa6fb9b5587c16f5d24a0906ad46ea93.jpg" alt="Camisa Nike Dry Fit">
                <h3>Camisa Nike Dry Fit</h3>
                <p>$699.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Short Nike Flex Stride">
                <img src="https://i.pinimg.com/564x/63/6a/ec/636aec6e2ec2bb4e4d119f88107de198.jpg" alt=" ">
                <h3>Short Nike Flex Stride</h3>
                <p>$849.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Chaqueta Adidas Terrex">
                <img src="https://i.pinimg.com/736x/3e/43/8f/3e438f45e4cb8b58439a5e949817c153.jpg" alt="Chaqueta Adidas Terrex">
                <h3>Chaqueta Adidas Terrex</h3>
                <p>$1,499.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Reloj Garmin Forerunner 45">
                <img src="https://i.pinimg.com/564x/30/84/8c/30848c77155a8ec6d31c97c7a20528b5.jpg" alt="Reloj Garmin Forerunner 45">
                <h3>Reloj Garmin Forerunner 45</h3>
                <p>$4,499.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
             <!-- Nuevos productos escolares -->
             <div class="product-card" data-name="Chamarra Deportiva Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/d6/df/50/d6df50624fbce138af0d7a8a509d69d8.jpg" alt="Chamarra Deportiva Escolar">
                <h3>Chamarra Deportiva Escolar</h3>
                <p>$599.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Tenis Sport Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/d6/e1/5d/d6e15dcdd3f6d1c14f9c6b68f54dd1ca.jpg" alt="Tenis Sport Escolar">
                <h3>Tenis Sport Escolar</h3>
                <p>$899.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Gorra Deportiva Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/b7/ac/a8/b7aca855a4ab7c74d64ea922213c1d41.jpg" alt="Gorra Deportiva Escolar">
                <h3>Gorra Deportiva Escolar</h3>
                <p>$199.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Calcetas Deportivas Escolares" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/80/5c/d6/805cd6a5de4f1940d79a65cfb329a389.jpg" alt="Calcetas Deportivas Escolares">
                <h3>Calcetas Deportivas Escolares</h3>
                <p>$99.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <!-- Nuevos productos -->
            <div class="product-card" data-name="Mochila Deportiva Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/4c/1a/4d/4c1a4d4aa7a4d0725c6d5c3362ae3352.jpg" alt="Mochila Deportiva Escolar">
                <h3>Mochila Deportiva Escolar</h3>
                <p>$399.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="botella de agua escolar" data-category="Escolar">
            <img src="https://i.pinimg.com/564x/ea/c9/e9/eac9e92b0270ec8180a862bfd3e63d8f.jpg" alt="Botella de Agua Escolar">
                <h3>Botella de Agua Escolar</h3>
                <p>$149.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Sudadera Deportiva Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/17/39/d7/1739d7ebf17e33a62da3394670690d8d.jpg" alt="Sudadera Deportiva Escolar">
                <h3>Sudadera Deportiva Escolar</h3>
                <p>$499.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Playera Escolar" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/f4/20/34/f420349d99a765a575e493147ecea5d6.jpg" alt="Playera Escolar">
                <h3>Playera Escolar</h3>
                <p>$249.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
            </div>
            <div class="product-card" data-name="Pantalones Deportivos Escolares" data-category="Escolar">
                <img src="https://i.pinimg.com/564x/c2/cb/e6/c2cbe69447488ea928d43f953ff1a87a.jpg" alt="Pantalones Deportivos Escolares">
                <h3>Pantalones Deportivos Escolares</h3>
                <p>$349.00 MXN</p>
                <button class="btn btn-cart">Agregar al carrito</button>
                    <button class="btn btn-buy">Comprar</button>
             </div>
    <footer>
        <p>&copy; 2024 SportShop. Todos los derechos reservados. Diseñado por el equipo alfa buena maravilla escuadron lobo</p>
    </footer>
    <script>
        function searchProducts() {
            // Obtener el texto de búsqueda
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            
            // Obtener todos los productos
            const products = document.querySelectorAll('.product-card');
            
            products.forEach(product => {
                // Obtener el nombre del producto
                const productName = product.getAttribute('data-name').toLowerCase();
                
                // Comprobar si el nombre del producto incluye el término de búsqueda
                if (productName.includes(searchTerm)) {
                    product.style.display = 'block'; // Mostrar producto
                } else {
                    product.style.display = 'none'; // Ocultar producto
                }
            });
        }
    </script>
</body>
</html>
