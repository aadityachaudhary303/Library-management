<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Library Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .about-us-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background-color: #fff;
            margin-top: 20px;
        }

        .about-us-text {
            max-width: 800px;
            text-align: left;
            margin-right: 40px;
        }

        .about-us-text h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .about-us-text p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        .quote-container {
            background-color: #4CAF50;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .quote-container p {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .quote-container .author {
            font-size: 1rem;
            font-style: italic;
        }

        .back-button {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            margin-top: 30px;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #555;
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>About Us - Library Management System</h1>
    </div>

    <div class="about-us-container">
        <div class="about-us-text">
            <h2>Welcome to Our Library</h2>
            <p>Our library management system provides a comprehensive solution for managing library resources, including books, journals, and other materials. We strive to make library operations efficient, user-friendly, and accessible to all users.</p>
            <p>With a wide variety of features such as book lending, search functionality, and member management, our system helps libraries ensure that they serve their community in the most effective way possible. We are committed to continuously improving our system with new features and enhancements based on user feedback.</p>
            <p>Our team is passionate about technology and education, and we work hard to create a system that brings value to libraries and their patrons.</p>
        </div>

        <!-- Quote Section -->
        <div class="quote-container">
            <p>"A library is not a luxury but one of the necessities of life." </p>
            <div class="author">– Henry Ward Beecher</div>
        </div>
    </div>

    <!-- Back Button -->
    <div style="text-align: center;">
        <a href="home.php" class="back-button">Back</a>
    </div>

</body>
</html>
