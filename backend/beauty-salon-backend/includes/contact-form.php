 <section class="contact-section">
    <small>SCHEDULE YOUR PRESENCE</small>
    <h2>Get in touch</h2>
    <p>
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
    </p>

    <div class="form-wrapper">
      <form>
        <div class="form-group">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Name" required>
        </div>

        <div class="form-group">
          <i class="fa fa-envelope"></i>
          <input type="email" placeholder="Email" required>
        </div>

        <div class="form-group">
          <i class="fa fa-phone"></i>
          <input type="tel" placeholder="Phone">
        </div>

        <div class="form-group">
          <i class="fa fa-briefcase"></i>
          <input type="text" placeholder="Service You Need">
        </div>

        <div class="form-group">
          <i class="fa fa-edit"></i>
          <textarea placeholder="Any Note For Us"></textarea>
        </div>

        <button class="btn-submit">Submit</button>
      </form>
    </div>
  </section>
  <style>
  .contact-section {
      text-align: center;
      padding: 100px 20px;
    }

    .contact-section small {
      display: block;
      color: #a47280;
      font-weight: 500;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .contact-section h2 {
      font-size: 32px;
      margin-bottom: 10px;
      color: #2e1e23;
    }

    .contact-section p {
      max-width: 500px;
      margin: 0 auto 50px auto;
      color: #7a6a68;
      font-size: 15px;
      line-height: 1.6;
    }

    .form-wrapper {
      background-color: #fff;
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .form-group {
      position: relative;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 14px 14px 14px 45px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
      transition: all 0.2s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      border-color: #a47280;
      box-shadow: 0 0 0 2px rgba(164, 114, 128, 0.15);
    }

    .form-group textarea {
      min-height: 100px;
      resize: vertical;
    }

    .form-group a {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #a47280;
      font-size: 16px;
    }

    .btn-submit {
      background-color: #3a1e2b;
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      transition: background-color 0.25s ease;
    }

    .btn-submit:hover {
      background-color: #5a2f44;
    }

    @media (max-width: 480px) {
      .form-wrapper {
        padding: 25px;
      }
    }
    </style>