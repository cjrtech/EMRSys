<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css">
  <title>Electronic Medical Record System</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #e9d4a9;
    }
    
    #navigation {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50px;
      background-color: rgb(69, 94, 238);
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    
    #navigation a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    button{
      border-radius: 40px;
      border: 0;
      font-size: 1.8rem;
      font-weight: 600;
      margin: 1rem 0;
      padding: 2rem 3rem;
      text-transform: uppercase;
      white-space: nowrap;
      background: #4a62ee;
      color: white;
      margin-left: 250px;
      margin-top: 75px;
    }

    button:hover{
      background: #5c7eee;
    }

    .button-container button {
      background-color: #4a62ee;
      color: #fff;
      border: none;
      padding: 8px 16px;
      font-size: 16px;
      margin-left: 10px;
      border-radius: 4px;
      cursor: pointer;
    }

    .button-container button:hover {
      background-color: #5c7eee;
    }

    header{
      background-color: #d6bf91;
      padding: 10px;
      color: black;
    }

    header h1{
      margin: 0;
    }

    header .button-container {
      text-align: right;
    }

    h1{
      text-align: left;
    }
    
    h2{
      text-align: center;
      font-size: 2rem;
      font-weight: 500;
    }

    input{
      text-align: center;
      margin-top: 10px;
      margin-left: 10px;
      margin-right: 10px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    #content {
      padding-bottom: 60px;
    }
    
    .screen {
      display: none;
      padding: 20px;
    }

    .info{
      text-align: center;
    }
    
    .active {
      display: block;
    }

    input[address]{
      width: 25%;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="time"] {
            width: 60%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

    input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4a62ee;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    input[type="submit"]:hover {
            background-color: #5c7eee;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td, table th {
            padding: 8px;
            border: 1px solid #ddd;
            background-color: #85a0f7;
        }

        table th {
            background-color: #f2f2f2;
        }

        .login-form-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #d6bf91;
      padding: 20px;
      text-align: center;
      margin-bottom: 20px;
      border-radius: 5px;
    }

    .login-form-container h1 {
      margin: 0;
    }

    .login-form-container input[type="text"],
    .login-form-container input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    .login-form-container button {
      background-color: #4a62ee;
      color: white;
      padding: 14px 20px;
      margin: 8px 4px;
      border: none;
      cursor: pointer;
      width: 48%;
      border-radius: 4px;
    }

    .login-form-container button.cancel-button {
      background-color: #ccc;
    }

    .login-form-container button:hover {
      background-color: #5c7eee;
    }
        .chat-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: left;
    }
    
    .message {
      padding: 10px;
      background-color: #f2f2f2;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .user {
      color: #333;
      font-weight: bold;
    }

    .timestamp {
      color: #666;
      font-size: 12px;
    }
    

  </style>
  <script>
    function showScreen(screenIndex) {
      var screens = document.getElementsByClassName('screen');
      for (var i = 0; i < screens.length; i++) {
        screens[i].classList.remove('active');
      }
      screens[screenIndex].classList.add('active');
    }
  </script>
</head>
<body>
  <header>
    <div class="button-container">
      <h1>Joe Smith</h1>
      <button id="login-button" onclick="showScreen(5);">Login</button>
      <button id="create-account-button" onclick="showScreen(6);">Create Account</button>
      <button id="chat-button" onclick="showScreen(7);">Live Chat</button>
    </div>

  </header>
  <div id="content">
    <div class="screen active">
      <h2>Home</h2>
      <center>
        <img class="patient" src="https://images.unsplash.com/photo-1623184663110-89ba5b565eb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwcm9maWx
        lLXBhZ2V8M3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" width="500px" height="350px">
      </center>
      <h2>Appointment Info</h2>
      <table>
        <tr>
            <th>Name</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Reason</th>
        </tr>
        <?php include 'appointments.php'; ?>
      </table>
    </div>
    <div class="screen">
      <h2>Schedule Appointment</h2>
      <center>
        <img class="calendar" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRQusSHQmBQZQg
        Y_p4hD5XbwK7nx8QNm632EuId5-hYPbE3Krg8" width="500px" height="350px">
      </center>
      <form action="submit.php" method="POST">
        <label for="patient_name">Patient Name:</label>
        <input type="text" name="patient_name" id="patient_name">
      
        <label for="appointment_date">Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date">
      
        <label for="appointment_time">Appointment Time:</label>
        <input type="time" name="appointment_time" id="appointment_time">
      
        <label for="reason">Reason:</label>
        <textarea name="reason" id="reason"></textarea>
      
        <input type="submit" value="Submit">
    </form>
  </div>
    <div class="screen">
      <h2>Check Prescriptions</h2>
      <h3>Prescriptions</h3>
      <table>
        <tr>
            <th>Prescription</th>
            <th>Dosage</th>
            <th>Frequency</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
        <?php include 'prescriptions.php'; ?>
      </table>
    <form action="submit_prescriptions.php" method="POST">
        <label for="medication">Medication:</label>
        <input type="text" name="medication" required><br><br>

        <label for="dosage">Dosage:</label>
        <input type="text" name="dosage" required><br><br>

        <label for="frequency">Frequency:</label>
        <input type="text" name="frequency" required><br><br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required><br><br>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required><br><br>

        <input type="submit" value="Add Prescription">
    </form>
    </div>
    <div class="screen">
      <h2>Profile</h2>
      <center>
        <img class="patient" src="https://images.unsplash.com/photo-1623184663110-89ba5b565eb6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwcm9maWx
        lLXBhZ2V8M3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" width="500px" height="350px">
      </center>
      <form action="info.php" method="post">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="sex">Sex:</label>
        <input type="text" id="sex" name="sex" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="pharmacy">Pharmacy:</label>
        <input type="text" id="pharmacy" name="pharmacy" required>

        <input type="submit" value="Update Info">
    </form>
    </div>
    <div class="screen">
      <h2>Settings</h2>
      <button>Brightness</button>
      <button>Dark Mode</button>
      <button>Time Zone</button>
      <button>Delete Account</button>
      <button>Contact</button>
    </div>

    <div class="screen">
      <div class="login-form-container">
      <h1>Login</h1>
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Login</button>
      <button type="button" class="cancel-button" onclick="showScreen(0)">Cancel</button>
    </form>
    </div>

    </div>
<div class="screen">
    <div class="login-form-container">
      <h1>Create Account</h1>
  
      <form action="your-server-side-script" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" value="Create Account">
        <input type="button" value="Cancel" onclick="history.back()">
      </form>
    </div>
</div>

<div class="screen">
 <h1>Live Chat</h1>
 <div class="chat-container">
    <div class="message">
      <span class="user">Dr. Green:</span>
      <span class="timestamp">10:30 AM</span>
      <p>Hello, what seems to be going on?</p>
    </div>

    <div class="message">
      <span class="user">Joe Smith:</span>
      <span class="timestamp">10:35 AM</span>
      <p>I'm feeling sick and have lots of pain!</p>
    </div>

    <div class="message">
        <span class="user">Dr. Green:</span>
        <span class="timestamp">10:40 AM</span>
        <p>Okay, let's get you booked for an appointment! Based on your medical history it could be your wound again.</p>
      </div>

    <form action="#" method="POST">
      <input type="text" placeholder="Type your message here" required>
      <input type="submit" value="Send">
    </form>
    </div>
  </div>
  
  <div id="navigation">
    <a href="#" onclick="showScreen(0);">Home</a>
    <a href="#" onclick="showScreen(1);">Schedule</a>
    <a href="#" onclick="showScreen(2);">Prescriptions</a>
    <a href="#" onclick="showScreen(3);">Profile</a>
    <a href="#" onclick="showScreen(4);">Settings</a>
  </div>

</body>
</html>

