if(document.querySelector('#calculator')) {
  const calculator = document.querySelector('#calculator');
  const allForms = calculator.querySelectorAll('.ce_form');
  const allZoneElements = document.querySelectorAll('.zone');
  const allZones = [];
  allZoneElements.forEach(element => {
    const newZone = {};
    const zipArray = [];
    newZone.name = element.querySelector('span').innerHTML;
    element.querySelectorAll('li').forEach(zip => {
      zipArray.push(zip.innerHTML);
    })
    newZone.zips = zipArray;
    allZones.push(newZone);
  })
  allForms.forEach(form => {
    const zipInput = form.querySelector('input[name=plz]');
    const cityInput = form.querySelector('input[name=netzgebiet]');
    const submitButton = form.querySelector('.widget-submit button')
    zipInput.addEventListener('input', function() {
      submitButton.classList.remove('active');
      cityInput.value = '';
      allZones.forEach(zone => {
        zone.zips.forEach(zip => {
          if(zipInput.value !== '' && zip.startsWith(zipInput.value)) {
            cityInput.value = zone.name;
            if(zipInput.value.length === 5) {
              submitButton.classList.add('active');
            }
          }
        })
      })
    })
  })
}
