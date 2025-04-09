<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yacht Booking</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .container {
      padding: 50px;
    }
    .yacht-details {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 50px;
    }
    .yacht-details h2 {
      color: #007bff;
      margin-bottom: 20px;
    }
    .yacht-details img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .yacht-details table {
      width: 100%;
    }
    .yacht-details table th {
      text-align: left;
      padding: 10px;
    }
    .yacht-details table td {
      padding: 10px;
    }
    .booking-form {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .booking-form h2 {
      color: #007bff;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
    }
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
      padding: 12px 30px;
      border-radius: 5px;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Yacht Details Section -->
    <div class="yacht-details">
      <h2>Yacht Details</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="yacht.jpg" alt="Yacht Image">
        </div>
        <div class="col-md-6">
          <table class="table">
            <tbody>
              <tr>
                <th>Yacht Name:</th>
                <td>Example Yacht</td>
              </tr>
              <tr>
                <th>Yacht Type:</th>
                <td>Luxury Yacht</td>
              </tr>
              <tr>
                <th>Length:</th>
                <td>50 feet</td>
              </tr>
              <tr>
                <th>Guest Capacity:</th>
                <td>10</td>
              </tr>
              <tr>
                <th>Cabin Number:</th>
                <td>5</td>
              </tr>
              <tr>
                <th>Engine Type:</th>
                <td>Diesel</td>
              </tr>
              <tr>
                <th>Year of Build:</th>
                <td>2022</td>
              </tr>
              <tr>
                <th>Price:</th>
                <td>$1000 per hour</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Yacht Booking Section -->
    <div class="booking-form">
      <h2>Yacht Booking</h2>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" class="form-control" placeholder="Enter your address">
        </div>
        <div class="form-group">
          <label for="booking-date-time">Booking Date and Time:</label>
          <input type="datetime-local" id="booking-date-time" class="form-control">
        </div>
        <div class="form-group">
          <label for="duration">Duration (in hours):</label>
          <input type="number" id="duration" class="form-control" placeholder="Enter duration">
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
