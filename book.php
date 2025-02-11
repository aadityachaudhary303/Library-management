<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .book-card {
            background: #fff;
            width: 250px;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }
        .book-card:hover {
            transform: scale(1.05);
        }
        .book-icon {
            font-size: 40px;
            color: #ff5733;
        }
        h3 {
            margin: 10px 0;
            color: #333;
        }
        p {
            color: #666;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff5733;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>
    <h1>Library Book Collection</h1>
    <div class="container">
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>The Great Gatsby</h3>
            <p>by F. Scott Fitzgerald</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>To Kill a Mockingbird</h3>
            <p>by Harper Lee</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>1984</h3>
            <p>by George Orwell</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>Harry Potter and the Sorcerer's Stone</h3>
            <p>by J.K. Rowling</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>Pride and Prejudice</h3>
            <p>by Jane Austen</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>The Hobbit</h3>
            <p>by J.R.R. Tolkien</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>Moby-Dick</h3>
            <p>by Herman Melville</p>
        </div>
        <div class="book-card">
            <i class="fas fa-book book-icon"></i>
            <h3>The Catcher in the Rye</h3>
            <p>by J.D. Salinger</p>
        </div>
    </div>
    <a href="home.php" class="back-button">Go Back</a>
</body>
</html>
