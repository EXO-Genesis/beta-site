<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
</style>
</head>
<body>

<div class="topnav">
  <h1>EXO</h1>
  <div>
    <a href="/">Home</a>
    <a href="designs.php">Designs</a>
    <a class="active" href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>
</div>

<div style="padding-left:16px">
  <h2>Top Navigation Example</h2>
  <p>Some content..</p>
</div>

</body>
</html>
