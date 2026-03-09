<section class="contact-section">
  <div class="container">
    <div class="contact-grid">

      <!-- Form -->
      <div class="contact-form">
        <h2>Contact form</h2>

        <form method="post" action="">
          <label>Name</label>
          <input type="text" name="name" placeholder="Your name" required>

          <label>Email</label>
          <input type="email" name="email" placeholder="Your email" required>

          <label>Message</label>
          <textarea name="message" placeholder="Your message" required></textarea>

          <button type="submit" class="btn-submit">
            Send message
          </button>
        </form>
      </div>

      <!-- Contacts -->
      <div class="contact-info">
        <h2>Contact information</h2>

        <div class="email">
          <p>
            <strong class="red-text">Email:</strong>
            crashtheroutines@gmail.com
          </p>
        </div>

        <div class="add">
          <h3>Important</h3>
          <p>I am available for freelance projects.</p>
          <p>Feel free to contact me anytime.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $name = htmlspecialchars( $_POST[ 'name' ] );
    $email = htmlspecialchars( $_POST[ 'email' ] );
    $message = htmlspecialchars( $_POST[ 'message' ] );

    // Just a test for now
    if ( $name && $email && $message ) {
        echo "<p class='success'>Message sent!</p>";
    }
}
?>

<style>
  .contact-section {
  margin: 0 auto;
  padding: 60px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.contact-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
}

.contact-form,
.contact-info {
  flex: 1 1 45%;
  min-width: 300px;
}

form label {
  display: block;
  margin: 15px 0 5px;
  font-weight: bold;
}

input, textarea {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 6px;
  background: #1a1a1a;
  color: #fff;
  resize: none;
}

textarea {
  min-height: 120px;
  resize: none;
}

.btn-submit {
  margin-top: 20px;
  padding: 12px 20px;
  border: none;
  border-radius: 25px;
  background: #fd0008;
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s;
}

.btn-submit:hover {
  opacity: 0.8;
  background: #ffffff;
  color: black;
  border: 2px solid black;
}

/* .btn-submit::before {
  content: "";
  position: absolute;
  inset: 0;
  border: 2px solid white;
  border-radius: 4px;
  clip-path: inset(0 100% 0 0);
  transition: transform 0.1s ease; 
}

.btn-submit:hover::before {
  clip-path: inset(0 0 0 0);
  transform: scale(1);
}
*/
.email,
.add {
  margin-top: 25px;
  font-size: 20px;
}

.red-text {
  color: red;
}

.add p {
  margin-top: 15px;
}
</style>