<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Services</title>
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

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .service {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 250px;
            text-align: center;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .service:hover {
            transform: translateY(-10px);
        }

        .service h3 {
            color: #333;
            font-size: 1.5rem;
        }

        .service p {
            color: #666;
            font-size: 1rem;
        }

        .service-icon {
            font-size: 3rem;
            color: #4CAF50;
        }

        .back-button {
            display: block;
            text-align: center;
            margin: 20px 0;
        }

        .back-button a {
            text-decoration: none;
            color: white;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .back-button a:hover {
            background-color: #555;
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>Library Services</h1>
    </div>

    <div class="services-container">
        <div class="service">
            <div class="service-icon">📚</div>
            <h3>Book Lending</h3>
            <p>Borrow books for a specific period with easy returns and renewals.</p>
        </div>
        <div class="service">
            <div class="service-icon">💻</div>
            <h3>Computer Access</h3>
            <p>Access computers for research, browsing, and educational purposes.</p>
        </div>
        <div class="service">
            <div class="service-icon">🔍</div>
            <h3>Research Assistance</h3>
            <p>Get help with research topics, book recommendations, and more.</p>
        </div>
        <div class="service">
            <div class="service-icon">📖</div>
            <h3>Study Rooms</h3>
            <p>Quiet study rooms available for group discussions or personal study.</p>
        </div>
    </div>

    <div class="back-button">
        <a href="home.php">Back</a>
    </div>

</body>
</html>
