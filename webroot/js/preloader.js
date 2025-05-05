
var preloader = document.getElementById('preloader');

if (!preloader || preloader?.innerHTML?.trim() === '') {
  // Create the preloader div
  var preloader = document.createElement('div');
  preloader.id = 'preloader';
  preloader.innerHTML = `
<div class="flex-column text-center">
  <div class="spinner-border text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
  <div class="text-muted fs-6 fw-semibold mt-4">Loading...</div>
</div>
`;
}

// // Style it with CSS
preloader.style.position = 'fixed';
preloader.style.top = 0;
preloader.style.left = 0;
preloader.style.width = '100%';
preloader.style.height = '100%';
preloader.style.backgroundColor = 'rgb(128, 128, 128)';
// preloader.style.backgroundColor = 'rgba(128, 128, 128, 0.9)'; // Light gray with 10% transparency
preloader.style.display = 'flex';
preloader.style.alignItems = 'center';
preloader.style.justifyContent = 'center';
preloader.style.zIndex = 9999;

// Add it to the body
document.body.appendChild(preloader);

// Remove preloader when page is fully loaded
window.addEventListener('load', () => {
  // setTimeout(function () {
    preloader.remove();
  // }, 2000);
});
