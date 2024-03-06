<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
      body {
          font-family: 'Arial', sans-serif;
          background-color: #f4f4f4;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
          margin: 0;
      }

      form {
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          width: 300px;
      }

      h2 {
          text-align: center;
          color: #333;
          margin-bottom: 20px; /* Tambahkan margin agar tidak terlalu rapat dengan form */
      }

      label {
          display: block;
          margin-bottom: 8px;
          color: #555;
      }

      input {
          width: 100%;
          padding: 10px;
          margin-bottom: 10px;
          border: 1px solid #ddd;
          border-radius: 4px;
          box-sizing: border-box;
      }

      input[type="submit"] {
          background-color: #4caf50;
          color: #fff;
          cursor: pointer;
      }

      input[type="submit"]:hover {
          background-color: #45a049;
      }
    </style>
</head>
<body>
    <h2>Sign In</h2>
    <form action="login.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="text" name="email" required><br>

        <label for="password">Create Password:</label>
        <input type="password" name="password" required><br>

        <label for="password">Confirm Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Sign In">
    </form>
</body>
</html>
