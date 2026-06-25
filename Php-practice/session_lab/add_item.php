<?php
require_once("config/db.php");
require_once("includes/auth.php");

check_login();

if (!isset($_GET['category_name'])) {
    header("Location: home.php");
    exit();
}

$category_name = $_GET['category_name'];
$error = '';
$success = '';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['item']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
    
    if (!empty($name) && !empty($price) && !empty($quantity)) {
        $sql = "INSERT INTO item (item_name, item_price, item_quantity, item_category) VALUES ('$name', '$price', '$quantity', '$category_name')";
        if (mysqli_query($connect, $sql)) {
            $success = "Item added successfully!";
        } else {
            $error = "Error: " . mysqli_error($connect);
        }
    } else {
        $error = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item - Session Lab</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 2rem; }
        .form-container { max-width: 500px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; margin-bottom: 0.5rem; }
        .subtitle { text-align: center; color: #666; margin-bottom: 1.5rem; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: .5rem; }
        input { width: 100%; padding: .5rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .actions { display: flex; gap: 10px; margin-top: 1rem; }
        .btn { flex: 1; padding: .75rem; border: none; border-radius: 4px; cursor: pointer; text-align: center; text-decoration: none; font-size: 1rem; }
        .btn-submit { background-color: #007bff; color: white; }
        .btn-submit:hover { background-color: #0069d9; }
        .btn-back { background-color: #6c757d; color: white; }
        .btn-back:hover { background-color: #5a6268; }
        .message { padding: 10px; border-radius: 4px; margin-bottom: 1rem; text-align: center; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Item</h1>
        <div class="subtitle">Category: <strong><?php echo htmlspecialchars($category_name); ?></strong></div>
        
        <?php if ($error): ?>
            <div class="message error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="message success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="item">Item Name</label>
                <input type="text" name="item" id="item" required>
            </div>
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" step="0.01" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" required>
            </div>
            <div class="actions">
                <button type="submit" name="submit" class="btn btn-submit">Save Item</button>
                <a href="home.php" class="btn btn-back">Back to Home</a>
            </div>
        </form>
    </div>
</body>
</html>
