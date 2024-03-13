<!DOCTYPE html>
<html lang="en">  <head>
  <title>Login</title>
  <style>
    /* Styles for the entire page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex; /* Center the form horizontally */
      justify-content: center;
      align-items: center;
      min-height: 100vh;  /* Set minimum height for full viewport coverage */
      background-color: #f0f0f0;  /* Light background color */
    }

    /* Styles for the login form */
    form {
      width: 300px;
      padding: 20px;
      border-radius: 5px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;  /* Ensure consistent width with padding */
      margin-bottom: 15px;
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #3498db; /* Adjust button color as desired */
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #2980b9; /* Darker shade on hover */
    }
  </style>
</head>
<body>
  <form method="POST" action="{{ route('login.process') }}">
    @csrf
    <h2>Login</h2>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Login</button>
  </form>
</body>
</html>

