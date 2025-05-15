<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $system = htmlspecialchars($_POST["system"]);
    $disease = htmlspecialchars($_POST["disease"]);
    $medicine = htmlspecialchars($_POST["medicine"]);
    $tip = htmlspecialchars($_POST["tip"]);

    $entry = "<div><strong>System:</strong> $system<br>
              <strong>Disease:</strong> $disease<br>
              <strong>Medicine:</strong> $medicine<br>
              <strong>Tip:</strong> $tip</div><hr>\n";

    file_put_contents("data.txt", $entry, FILE_APPEND);

    header("Location: tips.php");
    exit();
}
?>
