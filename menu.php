<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Card</title>
    <style>
        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
</head>
<body style="background-color:powderblue;">

<body>
    <h1>Menu Card</h1>
    <div class="menu">
        <?php 
        $menuItems = [
            ['name' => 'Hamburger', 'price' => 9.99],
            ['name' => 'Cheese Pizza', 'price' => 12.99],
            ['name' => 'Caesar Salad', 'price' => 7.49],
            ['name' => 'Spaghetti Carbonara', 'price' => 14.99],
            ['name' => 'Chocolate Brownie', 'price' => 5.99]
        ];
        
        foreach ($menuItems as $item) { 
        ?>
            <div class="menu-item">
                <span><?php echo $item['name']; ?></span>
                <span>$<?php echo number_format($item['price'], 2); ?></span>
            </div>
        <?php 
        } 
        ?>
    </div>
</body>
</html>
