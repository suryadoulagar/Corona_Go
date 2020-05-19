<?php
include 'logic.php'
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>go coronaa-corona go!</title>
<!--bootstrap css -->
<link rel = 'stylesheet' href = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<!--bootstrap js -->
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js'></script>
<script src = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<!--googlw fonts-->
<link href = 'https://fonts.googleapis.com/css2?family=Courgette&family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap' rel = 'stylesheet'>
<!-- font awesome-->
<script src = 'https://kit.fontawesome.com/f897af92f1.js' crossorigin = 'anonymous'></script>

<!--stylesheet-->
<link rel = 'stylesheet' href = 'style.css'>

</head>

<body>
<div class = 'container-fluid bg-light p-5 text-center my-2'>
<div class = 'row'>
<div class = 'col'>

<h1><i class="fas fa-mask"></i>Corona-Cop</h1>
<h5 class = 'text-muted'>Stay Home, Stay Safe</h5>

</div>
</div>
<marquee width="100%" direction="right" height="20px" scrollamount="12">
Goo Coronaa..Corona Goo!!
</marquee>
</div>

<div class = 'container my-5'>
<div class = 'row text-center'>
<div class = 'col-4 text-warning'>
<h5>total confirmed</h5>

<?php echo $total_confirmed;
?>

</div>

<div class = 'col-4 text-success'>
<h5>Recovered</h5>

<?php echo $total_recovered;
?>

</div>

<div class = 'col-4 text-danger'>
<h5>Deaths</h5>

<?php echo $total_deaths;
?>

</div>
</div>
</div>

<div class = 'container-fluid'>
<div class = 'table-resposive'>

<table class = 'table'>
<thead class = 'thead-dark'>
<tr>
<th scope = 'col-md-3 sm-3'>COUNTRIES</th>
<th scope = 'col-md-3 sm-3'>CASES SO FAR</th>
<th scope = 'col-md-3 sm-3'>RECOVERED</th>
<th scope = 'col-md-3 sm-3'>TOTAL DEATHS</th>

</tr>
</thead>

<tbody>
<?php
foreach ( $data as $key => $value ) {
    $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
    ?>

    <tr>
    <th><?php echo $key;
    ?></th>
    <td>
    <?php echo $value[$days_count]['confirmed'];
    ?>
    <?php if ( $increase != 0 ) {
        ?>
        <small class = 'text-danger pl-3'><i class = 'fas fa-sort-up'></i><?php echo $increase;
        ?></small>
        <?php }
        ?>
        </td>

        <td>
        <?php echo $value[$days_count]['recovered'];
        ?>
        </td>

        <td>
        <?php echo $value[$days_count]['deaths'];
        ?>
        </td>

        </tr>

        <?php
    }
    ?>
    </tbody>

    </table>

    </div>
    </div>

    <footer class = 'footer mt-auto py-4 bg-light'>
    <div class = 'container text-center'>
    <span class = 'text-muted'>Copyrights &copy;
    2020, <a href = 'https://suryadoulagar.home.blog/author/suryadoulagar/' target = '_blank'><h3>Surya Doulagar</h3></a> </span>
    </div>
    </footer>

    </body>

    </html>