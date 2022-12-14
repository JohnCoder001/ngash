<?php
/** @var $pdo \PDO */
require_once "../../database.php";
require_once "../../function.php";
$errors = [];
$title = '';
$price = '';
$description = '';
$product = ['image' => ''];
echo $_SERVER['REQUEST_METHOD'].'<br>';
if($_SERVER['REQUEST_METHOD'] ==='POST'){
include_once "../../validate_product.php";
if(empty($errors)) {
  $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, `create-date`)
  VALUES (:title, :image, :description, :price, :date)");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagepath );
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', date('y-m-d H:i:s'));
$statement->execute();
header('Location: index.php');
}
  }
?>
<?php include_once "../../views/partials/header.php"?>;
    <p>
        <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
    </p>
    <h1>Create New Product</h1>
    <?php include_once "../../views/products/form.php" ?>
    </html>
    </body> 
    