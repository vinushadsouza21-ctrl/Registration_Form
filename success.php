<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Successful</title>
  <link rel="stylesheet" href="style_2.css" />
</head>
<body>
  <div class="container">
    <div class="card output" style="display:block;">
      <h2>🎉 Registration Successful!</h2>
      <p><strong>👤 Full Name:</strong> <?php echo $_GET['fullname']; ?></p>
      <p><strong>📧 Email:</strong> <?php echo $_GET['email']; ?></p>
      <p><strong>📱 Phone:</strong> <?php echo $_GET['phone']; ?></p>
      <p><strong>🎂 Date of Birth:</strong> <?php echo $_GET['dob']; ?></p>
      <p><strong>🌍 Nationality:</strong> <?php echo $_GET['nationality']; ?></p>
      <p><strong>🏠 Address:</strong> <?php echo $_GET['address']; ?></p>
      <p><strong>🗺️ State:</strong> <?php echo $_GET['state']; ?></p>
      <p><strong>⚧ Gender:</strong> <?php echo $_GET['gender']; ?></p>
      <p><strong>🎓 Selected Course:</strong> <?php echo $_GET['course']; ?></p>
      <p style="text-align:center; color:#6a11cb; font-weight:bold;">Thank you for registering with us! 🌟</p>
      <div style="text-align:center; margin-top:15px;">
        <a href="index_2.html" class="submit-btn" style="text-decoration:none;">⬅ Back to Form</a>
      </div>
    </div>
  </div>
</body>
</html>
