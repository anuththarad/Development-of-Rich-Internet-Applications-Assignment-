<?php

echo "<h1 style='text-align:center; color:#d35400;'>Savory Spot</h1>";
echo "<p style='text-align:center; font-size:20px;'>WELCOME! Check out our delicious menu items below!</p>";


class MenuItem {
    public $name;       
    public $category;   
    public $price;      

    // Constructor to initialize menu item
    public function __construct($name, $category, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    // Method to display menu item 
    public function displayItem() {
        echo "<div style='border: 2px solid #e67e22; border-radius:10px; width:250px; padding:15px; margin:10px; display:inline-block; vertical-align:top; box-shadow:2px 2px 8px #ccc; text-align:center;'>";
        echo "<h2 style='color:#e67e22;'>{$this->name}</h2>";
        echo "<p>Category: <strong>{$this->category}</strong></p>";
        echo "<p>Price: <strong>Rs.{$this->price}</strong></p>";
        echo "</div>";
    }
}

// Create menu items (objects)
$item1 = new MenuItem("Margherita Pizza", "Main Course", 650.00);
$item2 = new MenuItem("Chicken Fried Rice", "Main Course", 1200.00);
$item3 = new MenuItem("Chicken Soup", "Appetizer", 550.00);
$item4 = new MenuItem("Chicken& Garlic Pasta", "Main Course", 1500.00);
$item5 = new MenuItem("Chicken Salad", "Appetizer", 600.00);
$item6 = new MenuItem("Chocolate Cake", "Dessert", 550.00);
$item7 = new MenuItem("Mango Smoothie", "Beverage", 120.00);
$item8 = new MenuItem("Grilled Chicken", "Main Course", 1450.00);
$item9 = new MenuItem("Chicken Pasta", "Main Course", 1000.00);


// Display all menu items
$item1->displayItem();
$item2->displayItem();
$item3->displayItem();
$item4->displayItem();
$item5->displayItem();
$item6->displayItem();
$item7->displayItem();
$item8->displayItem();
$item9->displayItem();
?>
