</main>
 <footer>
    <div class="footer-top">
     <div class="footer-logo">
      <img src="../assets/svg/footer-logo.svg" alt="Logo" >
    </div>

      <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>

      <div class="footer-columns">
        <div class="footer-col">
          <h4>Explore</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Utility Pages</h4>
          <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Keep in Touch</h4>
          <ul>
            <li>Address: Mariendalsvej 50D 22000 Frederiksberg</li>
            <li>Mail: support@servicemarket.com</li>
            <li>Phone: (+22) 123 - 4567 - 900</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      © 2023 ServiceMarket.dk &nbsp; | &nbsp; All rights reserved.
    </div>
  </footer>
<script src="/assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/a2e0e6c54d.js" crossorigin="anonymous"></script>
</body>
</html>

<style>
  /* ---------- FOOTER ---------- */
footer {
  background: #2b1823;
  color: #fff;
  padding: 60px 60px 30px;
}

.footer-top {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-wrap: wrap;
  gap: 40px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding-bottom: 40px;
}

.footer-logo {
  flex: 1;
  min-width: 200px;
}

.footer-logo h3 {
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
  margin-bottom: 12px;
}

.social-icons {
  display: flex;
  gap: 10px;
  margin-top: 10px;
}

.social-icons a {
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 6px;
  color: #fff;
  text-decoration: none;
  transition: 0.3s;
  font-size: 14px;
}

.social-icons a:hover {
  background: #9b5f74;
  border-color: #9b5f74;
}

.footer-columns {
  display: flex;
  flex: 3;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}

.footer-col h4 {
  font-size: 16px;
  margin-bottom: 14px;
  font-weight: 600;
}

.footer-col ul {
  list-style: none;
}

.footer-col ul li {
  margin-bottom: 8px;
}

.footer-col ul li a {
  color: #ddd;
  text-decoration: none;
  font-size: 14px;
  transition: color 0.3s;
}

.footer-col ul li a:hover {
  color: #9b5f74;
}

.footer-bottom {
  text-align: center;
  padding-top: 25px;
  font-size: 13px;
  color: #ccc;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
}

@media (max-width: 768px) {
  footer {
    padding: 40px 20px 20px;
  }

  .footer-top {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .footer-columns {
    flex-direction: column;
    align-items: center;
    gap: 25px;
  }

  .footer-col h4 {
    margin-bottom: 10px;
  }
}
</style>