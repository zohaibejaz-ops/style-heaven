<?php
include 'connect.php'; // Include your database connection file

// Fetch all user data from the database
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>THE CLOTHERS | About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar Styling */
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            align-items: center;
        }

        nav ul li {
            margin-left: 20px;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            font-weight: bold;
            font-size: 16px;
        }

        nav ul li:hover a {
            background-color: #555;
            border-radius: 5px;
        }

        /* Header Section */
        .about-header {
            text-align: center;
            margin-top: 120px;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-header h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .about-header p {
            font-size: 1.2em;
            color: #777;
            max-width: 800px;
            margin: 0 auto;
        }

        /* About Us Section */
        .about-us {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            background-color: #f4f4f4;
        }

        .about-us h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.1em;
            color: #555;
            max-width: 800px;
            text-align: center;
            margin-bottom: 50px;
        }

        .mission {
            background-color: white;
            padding: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .mission h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .mission p {
            font-size: 1.1em;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Team Section */
        .team {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 50px;
        }

        .team-member {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 1em;
            color: #777;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Footer */
        footer {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 20px;
            color: white;
        }

        footer p {
            font-size: 14px;
        }

       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            font-size: 35px;
            margin-left: 330px;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-btn {
            background-color: #ff3333;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="insert.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
           <li><a href="about.html">About Us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    

        <!-- Right Side (Search, Cart, Account) -->
        <ul class="right">
            <li><input type="text" class="search-bar" placeholder="Search..."></li>
            <li><a href="cart.php"><i class="icon">&#128722;</i></a> <!-- Cart Icon --></li>
            <li><i class="icon">&#128276;</i> <!-- Notification Icon --></li>
            <li><a href="#">Account</a>
                <ul>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#signup">Sign Up</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- About Us Header -->
    <div class="about-header">
        <h3><b>All Registered Employees</b></h3>
    </div>

    <!-- Employee Table -->
    <table>
        <tr>
            <th style="background-color: red;color:white;">Name</th>
            <th style="background-color: red;color:white;">Age</th>
            <th style="background-color: red;color:white;">Cloth</th>
            <th style="background-color: red;color:white;">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['age']); ?></td>
            <td><?php echo htmlspecialchars($row['product']); ?></td>
            <td><button class="delete-btn" onclick="deleteRow(<?php echo $row['id']; ?>)">Delete</button></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script>
        function deleteRow(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location = "delete.php?id=" + id;
            }
        }
    </script>
    
    <!-- Footer -->
    <footer style="margin-top:190px;">
        <p>&copy; 2024 THE CLOTHERS. All rights reserved.</p>
    </footer>

</body>

</html>
