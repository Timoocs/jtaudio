function enlargeImage(imgElement) {
  const overlay = document.getElementById('overlay');
  const overlayImage = document.getElementById('overlayImage');
  overlayImage.src = imgElement.src;
  overlay.style.display = 'flex';
}

function closeOverlay() {
  const overlay = document.getElementById('overlay');
  overlay.style.display = 'none';
}
