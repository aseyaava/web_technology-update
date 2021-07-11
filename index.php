    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping cart system</title>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





    </head>
    <body>


    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  
  <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp; OCS</a>

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Speacial Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><span id="cart-item" class="badge badge-danger">1</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login2.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

        <div class="container">
            <div class="row mt-2 pb-3">
                <?php

                include 'config.php';
                $stmt = $conn->prepare("SELECT * FROM product");
                $stmt->execute();
                $result = $stmt->get_result();
                while($row = $result->fetch_assoc()):

                ?>
                <div class="col-lg-3">
                    <div class="card-deck">

                    <div class="card p-2 border-secondary mb-2">
                        <img src="<?= $row['product_image']?>" class="card-img-top"
                         height="250">
                         <div class="card-body p-1">
                             <h3 class="card-title text-center text info"><?= $row['product_name'] ?> </h3>
                             <h5 class="card-text text -center text-danger"><?= number_format($row['product_price'],2)?>/-</h5>
                </div>
                <div class="card-footer p-1">
                    <a href ="action.php? id=<?= $row['id'] ?>" class="btn btn-info btn-block"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to Card</a>
                </div>

                    </div>
                    </div>

                </div>
<?php endwhile; ?>
                
             </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </body>
    </html>