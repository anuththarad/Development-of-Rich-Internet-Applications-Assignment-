<?php
// Define a class named "Book"
class Book {
    // Properties (variables) of the class
    public $title;
    public $author;
    public $genre;
    public $price;
    public $image; 

    // Constructor to initialize values
    public function __construct($title, $author, $genre, $price, $image) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->price = $price;
        $this->image = $image;
    }

    // Method to display book details
    public function displayBook() {
        echo "<div style='
            width: 200px;
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
            box-shadow: 3px 3px 10px #ccc;
        '>";
        // Book image
        echo "<img src='{$this->image}' alt='{$this->title}' style='width:150px; height:200px; object-fit: cover; border-radius:5px;'><br><br>";
        // Book details
        echo "<strong>Title:</strong> {$this->title}<br>";
        echo "<strong>Author:</strong> {$this->author}<br>";
        echo "<strong>Genre:</strong> {$this->genre}<br>";
        echo "<strong>Price:</strong> Rs.{$this->price}<br>";
        echo "</div>";
    }
}

// Create objects of the class Book (with images)
$book1 = new Book("The Alchemist", "Paulo Coelho", "Fiction", 1800.00, "images/archemist.jpg");
$book2 = new Book("Atomic Habits", "James Clear", "Self-help", 900.00, "images/atomic.jpg");
$book3 = new Book("Clean Code", "Robert C. Martin", "Programming", 2400.00, "images/cleancode.jpg");
$book4 = new Book("The Art of Being Alone", "Renuka Gawrani", "Self-Help", 1100.00, "images/artof.png");
$book5 = new Book("Ikigai", "Héctor García and Francesc Miralles", "Self-help", 2800.00, "images/ikigai.jpg");
$book6 = new Book("The Secret", "Rhonda Byrne", "Self-help", 5800.00, "images/secret.jpg");

// Display bookshop title and intro paragraph
echo "<h1 style='text-align:center; color:#2c3e50;'>Sarasavi Books</h1>";
echo "<p style='text-align:center; font-size:18px; color:#555; max-width:700px; margin:auto;'>
Welcome to Sarasavi Books! Find your next favorite read .
</p>";

// Start a big container box for all books
echo "<div style='
    width: 90%;
    margin: 20px auto;
    padding: 20px;
    border: 2px solid #2c3e50;
    border-radius: 15px;
    box-shadow: 5px 5px 15px #aaa;
    background-color: #f9f9f9;
    text-align: center;
'>";

// Display all books inside the big box
$book1->displayBook();
$book2->displayBook();
$book3->displayBook();
$book4->displayBook();
$book5->displayBook();
$book6->displayBook();

// Close big container box
echo "</div>";
?>
