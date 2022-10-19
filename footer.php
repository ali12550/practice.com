  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer   py-6 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-white mb-4">Get In Touch</h4>
                  <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                  <p class="mb-2"><i class="fa fa-phone me-3"></i>

                      +012 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Quick Links</h4>
                  <a class="btn btn-link" href="">About Us</a>
                  <a class="btn btn-link" href="">Contact Us</a>
                  <a class="btn btn-link" href="">Our Services</a>
                  <a class="btn btn-link" href="">Terms & Condition</a>
                  <a class="btn btn-link" href="">Support</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Popular Links</h4>
                  <a class="btn btn-link" href="">About Us</a>
                  <a class="btn btn-link" href="">Contact Us</a>
                  <a class="btn btn-link" href="">Our Services</a>
                  <a class="btn btn-link" href="">Terms & Condition</a>
                  <a class="btn btn-link" href="">Support</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Newsletter</h4>
                  <form action="">
                      <div class="input-group">
                          <input type="text" class="form-control p-2 border rounded_start" placeholder="Your Email Address">
                          <button class="btn btn-primary text-white rounded_end">Sign Up</button>
                      </div>
                  </form>
                  <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                  <div class="d-flex pt-2">
                      <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                      <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->


  <!-- Copyright Start -->
  <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <p class="text-center mb-0">&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
      </div>
  </div>
  <!-- Copyright End -->



  <!-- JavaScript Libraries -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4366d6f846.js" crossorigin="anonymous"></script>
  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- product slider -->
  <!-- <script src="libs/jquery.tickerNews.min.js"></script>
    <script type="text/javascript">
        $(function(){
            _Ticker = $(".TickerNews").newsTicker();
        });
    </script> -->

  <script>
      let ccNumberInput = document.querySelector('.cc-number-input'),
          ccNumberPattern = /^\d{0,16}$/g,
          ccNumberSeparator = " ",
          ccNumberInputOldValue,
          ccNumberInputOldCursor,

          ccExpiryInput = document.querySelector('.cc-expiry-input'),
          ccExpiryPattern = /^\d{0,4}$/g,
          ccExpirySeparator = "/",
          ccExpiryInputOldValue,
          ccExpiryInputOldCursor,

          ccCVCInput = document.querySelector('.cc-cvc-input'),
          ccCVCPattern = /^\d{0,3}$/g,

          mask = (value, limit, separator) => {
              var output = [];
              for (let i = 0; i < value.length; i++) {
                  if (i !== 0 && i % limit === 0) {
                      output.push(separator);
                  }

                  output.push(value[i]);
              }

              return output.join("");
          },
          unmask = (value) => value.replace(/[^\d]/g, ''),
          checkSeparator = (position, interval) => Math.floor(position / (interval + 1)),
          ccNumberInputKeyDownHandler = (e) => {
              let el = e.target;
              ccNumberInputOldValue = el.value;
              ccNumberInputOldCursor = el.selectionEnd;
          },
          ccNumberInputInputHandler = (e) => {
              let el = e.target,
                  newValue = unmask(el.value),
                  newCursorPosition;

              if (newValue.match(ccNumberPattern)) {
                  newValue = mask(newValue, 4, ccNumberSeparator);

                  newCursorPosition =
                      ccNumberInputOldCursor - checkSeparator(ccNumberInputOldCursor, 4) +
                      checkSeparator(ccNumberInputOldCursor + (newValue.length - ccNumberInputOldValue.length), 4) +
                      (unmask(newValue).length - unmask(ccNumberInputOldValue).length);

                  el.value = (newValue !== "") ? newValue : "";
              } else {
                  el.value = ccNumberInputOldValue;
                  newCursorPosition = ccNumberInputOldCursor;
              }

              el.setSelectionRange(newCursorPosition, newCursorPosition);

              highlightCC(el.value);
          },
          highlightCC = (ccValue) => {
              let ccCardType = '',
                  ccCardTypePatterns = {
                      amex: /^3/,
                      visa: /^4/,
                      mastercard: /^5/,
                      disc: /^6/,

                      genric: /(^1|^2|^7|^8|^9|^0)/,
                  };

              for (const cardType in ccCardTypePatterns) {
                  if (ccCardTypePatterns[cardType].test(ccValue)) {
                      ccCardType = cardType;
                      break;
                  }
              }

              let activeCC = document.querySelector('.cc-types__img--active'),
                  newActiveCC = document.querySelector(`.cc-types__img--${ccCardType}`);

              if (activeCC) activeCC.classList.remove('cc-types__img--active');
              if (newActiveCC) newActiveCC.classList.add('cc-types__img--active');
          },
          ccExpiryInputKeyDownHandler = (e) => {
              let el = e.target;
              ccExpiryInputOldValue = el.value;
              ccExpiryInputOldCursor = el.selectionEnd;
          },
          ccExpiryInputInputHandler = (e) => {
              let el = e.target,
                  newValue = el.value;

              newValue = unmask(newValue);
              if (newValue.match(ccExpiryPattern)) {
                  newValue = mask(newValue, 2, ccExpirySeparator);
                  el.value = newValue;
              } else {
                  el.value = ccExpiryInputOldValue;
              }
          };

      ccNumberInput.addEventListener('keydown', ccNumberInputKeyDownHandler);
      ccNumberInput.addEventListener('input', ccNumberInputInputHandler);

      ccExpiryInput.addEventListener('keydown', ccExpiryInputKeyDownHandler);
      ccExpiryInput.addEventListener('input', ccExpiryInputInputHandler);
  </script>

  </body>

  </html>