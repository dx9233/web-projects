<h1>Contact me</h1>
<form method="post">
  <input type="text" name="name" placeholder="Your name" required>
  <input type="email" name="email" placeholder="Email" required>
  <textarea name="message" placeholder="Message"></textarea>
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['message']);
    echo "<p>Thanks, $name! I'll contact you at $email.</p>";
}
?>
