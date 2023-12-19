if(document.querySelector('#calculator')) {
  const allForms = document.querySelectorAll('#calculator .ce_form');
  allForms.forEach(form => {
    console.log(form);
    const usageInput = form.querySelector('.usage-input');
    const icons = form.querySelectorAll('#household-number-icons img');

    const illuminateIcons = (amount) => {
      icons.forEach(icon => {
        icon.style.opacity = '.6';
      })
      icons[0].style.opacity = '1';
      for(let i = 0; i < amount; i++) {
        icons[i].style.opacity = '1';
      }
    }

    const updateInput = (amount) => {
      switch(amount) {
        case 1:
          usageInput.value = 1500;
          break;
        case 2:
          usageInput.value = 2500;
          break;
        case 3:
          usageInput.value = 3000;
          break;
        case 4:
          usageInput.value = 3500;
          break;
        case 5:
          usageInput.value = 4000;
          break;
        default:
          usageInput.value = 1500;
      }
    }


    usageInput.addEventListener('input', function () {
      const value = parseInt(usageInput.value);
      if(value <= 2499) {
        illuminateIcons(1);
      } else if(value >= 2500 && value <= 2999) {
        illuminateIcons(2);
      } else if(value >= 3000 && value <= 3499) {
        illuminateIcons(3);
      } else if(value >= 3500 && value <= 3999) {
        illuminateIcons(4);
      } else if(value >= 4000) {
        illuminateIcons(5);
      }
    })

    icons.forEach((icon, index) => {
      icon.addEventListener('click', function() {
        illuminateIcons(index+1);
        updateInput(index+1);
      })
    })
  })
}
