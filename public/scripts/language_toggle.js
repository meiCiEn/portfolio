function loadPageText(page, language) {
  const filePath = `public/data/text_files/${page}_${language}.json`;

  fetch(filePath)
    .then(response => response.json())
    .then(data => {
      // Update the page text when the data is loaded
      if (language === 'en') {
        englishText = data;
        console.log('English text loaded:', englishText);
        updateText('en');
      } else if (language === 'fr') {
        frenchText = data;
        console.log('French text loaded:', frenchText);
        updateText('fr');
      }
    })
    .catch(error => {
      console.error('Error loading JSON data:', error);
    });
}

function updateText(language) {
  const text = language === 'en' ? englishText : frenchText;

  // Loop through the keys in the JSON object
  for (const key in text) {
    // Check if an HTML element with the corresponding ID exists
    const element = document.getElementById(key);

    // If the element exists, update its content or attributes
    if (element) {
      // Check if the element has a "value" attribute
      if (element.hasAttribute('value')) {
        element.value = text[key];
      }
      // Check if the element has a "placeholder" attribute
      else if (element.hasAttribute('placeholder')) {
        element.placeholder = text[key];
      }
      // If none of the above, update the text content
      else {
        element.textContent = text[key];
      }
    }
  }
}

loadPageText(pageTitle, pageLang);