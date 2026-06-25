<?php
require_once("config/db.php");
require_once("includes/auth.php");

check_login();

// Fetch categories
$category_sql = "SELECT * FROM category";
$category_result = mysqli_query($connect, $category_sql);

// Fetch items
$item_sql = "SELECT * FROM item";
$item_result = mysqli_query($connect, $item_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Session Lab</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 2rem; background-color: #f8f9fa; }
        .container { max-width: 900px; margin: auto; background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        h1, h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; margin-bottom: 2rem; }
        th, td { border: 1px solid #dee2e6; padding: 12px; text-align: left; }
        th { background-color: #f1f3f5; }
        .btn { display: inline-block; padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        .btn:hover { background-color: #0056b3; }
        .btn-logout { background-color: #dc3545; }
        .btn-logout:hover { background-color: #c82333; }
        .header-info { display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-info">
            <div>
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
                <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            </div>
            <a href="logout.php" class="btn btn-logout">Logout</a>
        </div>

        <h2>Categories</h2>
        <table>
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($category_result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($category_result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><a href="add_item.php?category_name=<?php echo urlencode($row['name']); ?>" class="btn">Add Item</a></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No categories found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="add_category.php" class="btn">Add New Category</a>

        <h2 style="margin-top: 3rem;">Items</h2>
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($item_result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($item_result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['item_name']); ?></td>
                            <td>$<?php echo htmlspecialchars($row['item_price']); ?></td>
                            <td><?php echo htmlspecialchars($row['item_quantity']); ?></td>
                            <td><?php echo htmlspecialchars($row['item_category']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No items found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>