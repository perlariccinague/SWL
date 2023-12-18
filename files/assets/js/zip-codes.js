if(document.querySelector('#calculator')) {
  const calculator = document.querySelector('#calculator');
  const zipInput = calculator.querySelector('input[name=plz]');
  const allZoneElements = document.querySelectorAll('.zone');
  const cityInput = document.querySelector('input[name=netzgebiet]');
  const submitButton = document.querySelector('.widget-submit button')
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
}
