if(document.querySelector('.error')) {
  const errorElement = document.querySelector('.error');
  setTimeout(function() {
    if(document.querySelector('.error').closest('.ce_accordion').querySelector('.toggler')) {
      document.querySelector('.error').closest('.ce_accordion').querySelector('.toggler').click();
    }
    window.scrollTo({
      top: errorElement.offsetTop,
      left: errorElement.offsetLeft,
      behavior: 'smooth'
    });
  }, 150)
}
