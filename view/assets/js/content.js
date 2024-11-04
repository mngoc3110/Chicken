let currentIndex = 0;
const images = document.querySelector('.banner-images');
const buttons = document.querySelectorAll('.banner-button');
const totalImages = buttons.length; // Number of images

function showNextImage() {
  currentIndex = (currentIndex + 1) % totalImages; // Move to the next image
  updateBanner();
}

function updateBanner() {
  images.style.transform = `translateX(-${currentIndex * 33.33}%)`; // Move the banner
  buttons.forEach((button, index) => {
    button.classList.toggle('active', index === currentIndex); // Update button state
  });
}

buttons.forEach((button) => {
  button.addEventListener('click', () => {
    currentIndex = parseInt(button.getAttribute('data-index'), 10); // Get index from button
    updateBanner();
  });
});

setInterval(showNextImage, 10000); // Change image every 3 seconds



function showPromoCode() {
    document.getElementById('promoText').innerText = 'Mã khuyến mãi: GAUMAUHONG';
}
function closePromoCode() {
    document.getElementById('promoText').innerText = '" Nhận khuyến mãi "';
}