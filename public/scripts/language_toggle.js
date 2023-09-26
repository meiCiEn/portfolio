console.log( 'browser language:', navigator.language );

function detectBrowserLanguage ()
{
  if ( navigator.languages && navigator.languages.length > 0 )
  {
    // The first language in the list is the preferred language
    const primaryLanguage = navigator.languages[ 0 ].split( '-' )[ 0 ];

    // console.log(primaryLanguage);

    // Check if the primary language is French
    if ( primaryLanguage === 'fr' )
    {
      return 'fr'; // Set the site language to French
    } else
    {
      return 'en'; // Set the site language to English by default
    }
  } else if ( navigator.language )
  {
    // Fallback for older browsers that only support navigator.language
    const primaryLanguage = navigator.language.split( '-' )[ 0 ];

    // Check if the primary language is French
    if ( primaryLanguage === 'fr' )
    {
      return 'fr'; // Set the site language to French
    } else
    {
      return 'en'; // Set the site language to English by default
    }
  } else
  {
    return 'en'; // Default to English if language detection is not supported
  }
}

// Initialise the siteLanguage with the language returned from detectBrowserLanguage()
let siteLanguage = detectBrowserLanguage();

console.log( 'site language:', siteLanguage );

// Function to update the site language
function updateSiteLanguage ( language )
{
  // Set the siteLanguage to the specified language
  siteLanguage = language;
  console.log( 'site language:', siteLanguage );
// Set the lang attribute of <HTML> element (in header.php)
if ( siteLanguage === 'en' )
{
  document.documentElement.lang = `${ siteLanguage }-UK`;
} else
{
  document.documentElement.lang = `${ siteLanguage }-BE`;
}
}



// Event listener for the English button
document.getElementById('en-btn').addEventListener('click', function () {
  updateSiteLanguage('en'); // Set siteLanguage to English
  loadPageText(pageTitle, siteLanguage);
  console.log('Updated site language to English');
  console.log( 'lang attribute value:', document.documentElement.lang );
});

// Event listener for the French button
document.getElementById('fr-btn').addEventListener('click', function () {
  updateSiteLanguage('fr'); // Set siteLanguage to French
  loadPageText(pageTitle, siteLanguage);
  console.log('Updated site language to French');
  console.log( 'lang attribute value:', document.documentElement.lang );
});


function loadPageText ( page, language )
{
  const filePath = `public/data/text_files/${ page }_${ language }.json`;

  fetch( filePath )
    .then( response => response.json() )
    .then( data =>
    {
      // Update the page text when the data is loaded
      if ( language === 'en' )
      {
        englishText = data;
        console.log( 'English text loaded:', englishText );
        console.log( 'pageTitle, pageLang:', pageTitle, pageLang );
        updateText( 'en' );
      } else if ( language === 'fr' )
      {
        frenchText = data;
        console.log( 'French text loaded:', frenchText );
        console.log( 'pageTitle, pageLang:', pageTitle, pageLang );
        updateText( 'fr' );
      }
    } )
    .catch( error =>
    {
      console.error( 'Error loading JSON data:', error );
    } );
}

function updateText ( language )
{
  const text = language === 'en' ? englishText : frenchText;

  // Loop through the keys in the JSON object
  for ( const key in text )
  {
    // Check if an HTML element with the corresponding ID exists
    const element = document.getElementById( key );

    // If the element exists, update its content or attributes
    if ( element )
    {
      // Check if the element has a "value" attribute
      if ( element.hasAttribute( 'value' ) )
      {
        element.value = text[ key ];
      }
      // Check if the element has a "placeholder" attribute
      else if ( element.hasAttribute( 'placeholder' ) )
      {
        element.placeholder = text[ key ];
      }
      // If none of the above, update the text content
      else
      {
        element.textContent = text[ key ];
      }
    }
  }
}

// loadPageText( pageTitle, pageLang );


