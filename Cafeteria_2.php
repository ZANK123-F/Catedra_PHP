<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#bla"  />
    <title>Ventas de Alimentos</title>
    
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/styles.css/img." />
    <style>
    .card-img-top {
            height: 200px;
            object-fit: cover; 
        }
        </style>
  </head>
  <body>
    <header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist"
      >
        <li class="nav-item text-primary" role="presentation">
        <a
  class="nav-link"
  id="pills-home-tab"
  href="Comedores.php"
  role="tab"
  aria-controls="pills-home"
  aria-selected="true"
  >Home</a>

          
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>
    </header>

    <div class="alert container position-sticky top-0 alert-primary hide" role="alert">
    Producto Añadido al carrito!
    </div>
    <div class="alert container position-sticky top-0 alert-danger remove" role="alert">
      Producto removido!
    </div>

    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade "
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
        1
      </div>
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
        <h2 class="h4 m-4 text-white">Cafeteria 2</h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Messi Campeon</h5>
              <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 1.50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Chongenga</h5>
              <img src="./img/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 3</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pupusas</h5>
              <img src="./img/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 4.50</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Elote loco</h5>
              <img src="./img/platillo4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 8.90</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">VIVA MESSI</h5>
              <img src="./img/platillo5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 9.75</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">VIVA EL COMUNISMO</h5>
              <img src="./img/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 0.99</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Cancerbero</h5>
              <img src="./img/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 9.6</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-ligth rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Rapunzel</h5>
              <img src="./img/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text text-black-50 description">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <h5 class="text-primary">Precio: <span class="precio">$ 0.11</span></h5>
                <div class="d-grid gap-2">
                <button  class="btn btn-primary button">Añadir a Carrito</button>
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-black">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
          <button class="btn btn-success">COMPRAR</button>
        </div>
      </div>
      
      </div>
    </div>

    <footer class="bg-dark p-3 mt-5">
      <p class="text-center m-0 text-muted">Universidad Don bosco
      </p>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>