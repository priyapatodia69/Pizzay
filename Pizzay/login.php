<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Pizzay</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="page">
      <h2>Login</h2>
      <form class="auth-form" onsubmit="return loginUser(event)">
        <input type="email" id="loginEmail" placeholder="Email" required />
        <input
          type="password"
          id="loginPassword"
          placeholder="Password"
          required
        />
        <button type="submit" class="btn">Login</button>
      </form>
      <p>Don’t have an account? <a href="signup.php">Signup</a></p>
    </section>

    <script src="scrpt.js"></script>
  </body>
</html>
