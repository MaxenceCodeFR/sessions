<?php require 'inc/head.php';

session_start();

if (!isset($_SESSION['pseudo'])) {
    header('Location: login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php


        if (isset($_SESSION['name_product'])) {
            $products = $_SESSION['name_product'];

            foreach ($products as $product => $name) {
                echo $name . ' <br>';
            }
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>