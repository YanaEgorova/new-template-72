<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
     
     
        <header class="header">
          <div class="header__top">
            <div class="header__btn-block">
              <button class="header__btn js_menu-btn">
                <span></span>
              </button>
            </div>

              <nav class="nav js_menu">
                <a href="./index.html" class="header__logo logo js_website-name"></a>
                <div class="header__social-links-box">
                  <a href="" class="social-link social-link-email js_website-email"></a>
                  <a href="" class="social-link social-link-phone js_website-phone"></a>
                </div>
                <ul class="nav__list">
                  <li class="nav__item">
                    <a href="./contacts.html" class="nav__item">Contact Us</a>
                  </li>
                  <li class="nav__item">
                    <a href="./return.html" class="nav__item">Return Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./purchase.html" class="nav__item">Terms of Purchase</a>
                  </li>
                  <li class="nav__item">
                    <a href="./privacy.html" class="nav__item">Privacy Notice</a>
                  </li>
                  <li class="nav__item">
                    <a href="./shipping.html" class="nav__item">Shipping Policy</a>
                  </li>
                  <li class="nav__item">
                    <a href="./use.html" class="nav__item">Terms of Use</a>
                  </li>
                </ul>
              </nav>
              <a href="./shop.html" class="cart__span-box">
                cart <span class="cart__span js_cart__span"></span>
              </a>
          </div>
          <div class="header__bottom">
            <a href="./index.html" class="nav__item">Home</a>
            <a href="./thank-you.html" class="nav__item nav__item--second">Thank you page</a>
          </div>
        </header>
     
      </div>
    </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <div class="container">
        <footer class="footer">
          <div class="footer__top">
            <div class="footer__top-block">
              <div class="footer__block">
                <p class="footer__title">Terms</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                   </li>
                   <li class="footer__item">
                     <a href="./use.html" class="footer__link">Terms of Use</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Info</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./contacts.html" class="footer__link">Contact Us</a>
                   </li>
                   <li class="footer__item">
                     <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                    </li>
                </ul>
              </div>
              <div class="footer__block">
                <p class="footer__title">Policies</p>
                <ul class="footer__list">
                  <li class="footer__item">
                    <a href="./return.html" class="footer__link">Return Policy</a>
                   </li>
                   <li class="footer__item">
                     <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                    </li>
                </ul>
              </div>
            </div>
            <div class="footer__top-box">
              <div>
                <a href="./index.html" class="footer__logo logo js_website-name"></a>
                <p class="text text--mb js_website-corp"></p>
                <span class="text text--mb js_website-address"></span>
              </div>
              <div class="footer__social-block">
                <a href="" class="social-link social-link-email js_website-email"></a>
                <a href="" class="social-link social-link-phone js_website-phone"></a>
              </div>
            </div>
          </div>
          <div class="footer__bottom">
            <span class="footer__span">© All rights reserved</span>
          </div>
        </footer>
      </div>
    </div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>