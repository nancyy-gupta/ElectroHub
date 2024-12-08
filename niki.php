<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product = $_POST['product'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $product);
    header('Location: index.php');
    exit;
}

if (isset($_POST['remove_from_cart'])) {
    $product = $_POST['product'];
    if (isset($_SESSION['cart'])) {
        $index = array_search($product, $_SESSION['cart']);
        if ($index !== false) {
            unset($_SESSION['cart'][$index]);
        }
    }
    header('Location: index.php');
    exit;
}
?>
```

```php
// index.php
<?php
require_once 'cart.php';
?>

<!-- index.html content here -->

<?php
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        echo '<div>Item ' . $product . '</div>';
    }
}
?> 