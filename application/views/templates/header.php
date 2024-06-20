<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        .header {
            background-color: #ff8c00;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }
        .header .brand {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            margin-left: 10px;
            display: flex;
            align-items: center; /* Menyesuaikan ikon dan teks sejajar vertikal */
        }
        .header i {
            font-size: 2rem;
            color: white;
            margin-right: 5px; /* Menyesuaikan margin antara ikon dan teks */
        }
    </style>
</head>
<body>
    <div class="header">
        <i class="fas fa-bus"></i> <!-- Bootstrap Icons bus icon -->
        <div class="brand">TIKBOOS</div>
    </div>

    <!-- Your content here -->

    <!-- Optional: Bootstrap JS (if needed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
