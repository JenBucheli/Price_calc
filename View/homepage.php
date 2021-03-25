
<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Price Calculator</title>
</head>
<body>
<section>
    <form method="post">
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Customer
            </button>
            <div class="dropdown-menu">

                <?php  /** @var Customer $customer */
                foreach ((array)$customers  AS $customer):?>
                <a class="dropdown-item" type="<?php echo $customer->getId()?>"><?php echo $customer->getLastname()?><?php echo $customer->getFirstname()?>
                </a>
                <?php endforeach;?>

            </div>
        </div>

        <div class="btn-group">
            <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
            </button>
            <div class="dropdown-menu">

                <?php  /** @var Product $product */
                foreach ((array)$products  AS $product):?>
                    <a class="dropdown-item" type="<?php echo $product->getProduct_ID()?>"><?php echo $product->getName()?>
                    </a>
                <?php endforeach;?>

            </div>
        </div>
    </form>

</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
