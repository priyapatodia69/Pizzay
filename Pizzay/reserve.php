<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Pizzay-A Pizza Delivery App</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:700|Roboto:400&display=swap" rel="stylesheet" />
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="style.css">
</head>
<body onload="checkAuth()">
  <div id="orderConfirmationBanner" aria-live="polite" role="alert"></div>
  <header>
    <nav>
        <h1 class="logo">Pizzay</h1>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="reserve.php" class="active">Reserve</a></li>
          <li><a href="#" onclick="logoutUser()">Logout</a></li>
        </ul>
    </nav>

    <button id="themeToggleBtn" style="position:absolute; top:20px; right:20px; padding:7px 9px; border:none; background:#fff; color:var(--accent-dark); font-weight:700; border-radius:7px; cursor:pointer;">Dark Mode</button>
  </header>

    <section class="page">
      <h2>Reserve a table</h2>
      <form class="reserve-form">
        <input type="text" placeholder="Your Name" required />
        <input type="tel" placeholder="Your contact number" pattern="[0-9]{10}" title="Enter a valid 10 digit number" required />
        <input type="number" placeholder="No. of people" min="1" max="20" required/>
        
        <label for="timeSlot">Select Time Slot:</label>
        <select id="timeSlot" required>
            <option value="">Choose a time</option>
            <option value="6:00 PM">6:00 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="9:00 PM">9:00 PM</option>
            <option value="10:00 PM">10:00 PM</option>
        </select>
        <button type="submit" class="btn">Send</button>
      </form>
    </section>
  </body>
</html>
