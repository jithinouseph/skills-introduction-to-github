<!DOCTYPE html>
<html>
<head>
  <title>Medical Tips</title>
</head>
<body>
  <h2>All Medical Tips</h2>
  <?php
    $filename = "data.txt";
    if (file_exists($filename)) {
        echo file_get_contents($filename);
    } else {
        echo "<p>No tips added yet.</p>";
    }
  ?>
  <br><a href="index.html">Add New Tip</a>
</body>
</html>
