<footer class="footer mt-5 pt-4 pb-4 text-white">
  <div class="container">
      <div class="row">
          <div class="col-md-4 mb-3">
              <h5 class="footer-title">About Us</h5>
              <p class="footer-text">
                  We are dedicated to providing beautiful gradients in seconds. Our goal is to enhance your designs effortlessly and inspire creativity.
              </p>
          </div>
          <div class="col-md-4 mb-3">
              <h5 class="footer-title">Quick Links</h5>
              <ul class="list-unstyled footer-links">
                  <li><a class="text-white" href="/">Home</a></li>
                  <li><a class="text-white" href="/products">Products</a></li>
                  <li><a class="text-white" href="/categories">Categories</a></li>
                  <li><a class="text-white" href="/about">About</a></li>
                  <li><a class="text-white" href="/contact">Contact</a></li>
              </ul>
          </div>
          <div class="col-md-4 mb-3">
              <h5 class="footer-title">Follow Us</h5>
              <div class="social-icons">
                  <a class="text-white me-3" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a class="text-white me-3" href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a class="text-white me-3" href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                  <a class="text-white" href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      </div>
      <hr class="my-4 bg-white">
      <div class="text-center">
          <p class="mb-0">&copy; {{ date('Y') }} Brand. All rights reserved.</p>
      </div>
  </div>
</footer>

<style>
/* Footer Styles */
.footer {
  background-color: #070707; /* Gradient background */
  color: #fff; /* Text color */
}

.footer-title {
  font-size: 1.5rem; /* Title size */
  font-weight: bold; /* Title weight */
  margin-bottom: 1rem; /* Space below titles */
}

.footer-text {
  font-size: 0.9rem; /* Paragraph size */
  line-height: 1.5; /* Line height for readability */
}

.footer-links {
  padding-left: 0; /* Remove padding */
}

.footer-links li {
  margin-bottom: 0.5rem; /* Space between links */
}

.footer-links a {
  text-decoration: none; /* Remove underline */
  transition: color 0.3s; /* Transition effect */
}

.footer-links a:hover {
  color: #ffda44; /* Color on hover */
}

.social-icons a {
  font-size: 1.5rem; /* Icon size */
  transition: color 0.3s; /* Transition effect */
}

.social-icons a:hover {
  color: #ffda44; /* Color on hover */
}

@media (max-width: 576px) {
  .footer-title {
      margin-top: 1rem; /* Margin for smaller screens */
  }
}
</style>

<!-- Add Font Awesome CDN for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
