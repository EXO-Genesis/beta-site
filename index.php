<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow: hidden; /* Prevent scrollbars */
}

.topnav {
  overflow: hidden;
  background-color: #333;
  display: flex; /* Use flexbox */
  justify-content: space-between; /* Distribute items evenly */
  align-items: center; /* Center items vertically */
}

.topnav h1 {
  color: #f2f2f2;
  padding: 14px 16px;
  margin: 0; /* Remove default margin */
}

.topnav a {
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  overflow: hidden;
}

.video-background video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content {
  padding-left: 16px;
}

</style>
</head>
<body>

<div class="topnav">
  <img src="exologo.png" width="200vw">
  <div>
    <a class="active" href="/">Home</a>
    <a href="designs.php">Designs</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>
</div>

<div class="video-background">
  <video autoplay muted loop>
    <source src="home.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<div class="content">
  <h2>Top Navigation Example</h2>
  <p>Some content..</p>
</div>

</body>
</html>