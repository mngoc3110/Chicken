<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/css/content.css">
    <title>Document</title>
</head>
<body>
    <div class="upper-image-container">
        <div class="banner-images">
          <img src="./view/assets/image/banner_1.jpg" alt="Banner 1">
          <img src="./view/assets/image/banner_2.jpg" alt="Banner 2">
          <img src="./view/assets/image/banner_3.jpg" alt="Banner 3">
        </div>
        <div class="banner-buttons">
            <button class="banner-button" data-index="0"></button>
            <button class="banner-button" data-index="1"></button>
            <button class="banner-button" data-index="2"></button>
        </div>
      </div>
      <!-- header info -->
      <div class="header-info-container">
        <div class="header-info">
            <div class="header-info-item">
                <ion-icon name="fast-food-outline"></ion-icon>
                <p>FAVOURITE</p>
            </div>
            <div class="header-info-item">
                <ion-icon name="cash-outline"></ion-icon>
                <p>BESTSELLER</p>
            </div>
            <div class="header-info-item">
                <ion-icon name="cart-outline"></ion-icon>   
                <p>ĐẶT HÀNG</p>
            </div>
            <div class="header-info-item">
                <ion-icon name="gift-outline"></ion-icon>
                <p>KHUYẾN MÃI</p>
            </div>
            <div class="header-info-item">
                <ion-icon name="storefront-outline"></ion-icon>
                <p>CỬA HÀNG</p>
            </div>
        </div>
        </div>
      <div class="info-container">
        <div class="rectangle_1-container"></div>
        <div class="rectangle_2-container"></div>
        <div class="rectangle_3-container"></div>
        <div class="rectangle_4-container"></div>
        <div class="rectangle_5-container"></div>
      </div>
    <!-- combo ưu đãi -->
    <?php
        include "./view/discount_combo.html";
       
    ?>
    <?php
       
        include "./view/news.html";
    ?>
    <!-- comment -->
    
    <!-- section giảm giá -->
      <div class="discount-container">
            <div class="discount-rectangle">
                <p id="promoText">" Nhận khuyến mãi "</p>
                <div class="discount-button-container">
                    <div class="discount-cancel" onclick="closePromoCode()">Huỷ</div>
                    <div class="discount-button" onclick="showPromoCode()">Nhận</div>
            </div>
            </div>
      </div>
      <?php
        include "./view/comment.html";
      ?>
  <!-- Link to your external JavaScript file -->
  <script src="./view/assets/js/content.js"></script>
</body>
</html>
