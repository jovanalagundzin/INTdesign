// Fetch the product data from the JSON file
fetch('products.json')
  .then(response => response.json())
  .then(products => {
    // Process the product data
    displayProducts(products);
  })
  .catch(error => {
    console.error('Error fetching product data:', error);
  });

// Display the products on the page
function displayUsluge(usluge) {
  const uslugeContainer = document.getElementById('usluge');

  usluge.forEach(usluge => {
    const uslugeDiv = createProductElement(usluge);
    uslugeContainer.appendChild(uslugeDiv);
  });
}

// Create an individual product element
function createUslugeElement(usluge) {
  const uslugeDiv = document.createElement('div');
  uslugeDiv.classList.add('usluge');

  const načinIzradeProjekta = document.createElement('h3');
  načinIzradeProjekta.textContent = način.izrade.projekta;

  const kvadratura = document.createElement('p');
  kvadratura.textContent = kvadratura;

  uslugeDiv.appendChild(načinIzradeProjekta);
  uslugeDiv.appendChild(kvadratura);

  return uslugeDiv;
}