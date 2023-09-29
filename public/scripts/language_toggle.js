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
// Call the function on page load
setLanguageOnLoad();

// console.log( 'site language:', siteLanguage );

// Function to update the site language
function updateSiteLanguage ( language )
{
  // Set the siteLanguage to the specified language
  siteLanguage = language;
  // Set the lang attribute of <HTML> element (in header.php)
  if ( siteLanguage === 'en' )
  {
    document.documentElement.lang = 'en';
    // document.documentElement.lang = `${ siteLanguage }-UK`;
    // store user language preference and set it in the browser storage
    localStorage.setItem( 'site language', 'en' );

    loadPageText( pageTitle, 'en' );
    loadPageTitle( pageTitle, 'en' );
    loadClickMe( 'en' );
  } else
  {
    document.documentElement.lang = 'fr';
    // document.documentElement.lang = `${ siteLanguage }-BE`;
    // store user language preference and set it in the browser storage

    localStorage.setItem( 'site language', 'fr' );
    loadPageText( pageTitle, 'fr' );
    loadPageTitle( pageTitle, 'fr' );
    loadClickMe( 'fr' );
  }


  // Reload page when user changes language
  location.reload();
}

function setLanguageOnLoad ()
{
  // Get the user's selected language from browser storage
  const storedLanguage = localStorage.getItem( 'site language' );

  // If the user has a stored language preference, use it
  if ( storedLanguage )
  {
    siteLanguage = storedLanguage;
  }

  // Set the lang attribute of <HTML> element
  document.documentElement.lang = siteLanguage === 'en' ? `${ siteLanguage }-UK` : `${ siteLanguage }-BE`;

  // Show the button that corresponds to the current language and hide the other one
  if ( siteLanguage === 'en' )
  {
    document.getElementById( 'fr-btn' ).style.display = 'block'; // Show the English button
  } else
  {
    document.getElementById( 'en-btn' ).style.display = 'block'; // Show the French button
  }


  // fetch the text to be loaded
  loadPageText( pageTitle, siteLanguage );
  loadPageTitle( pageTitle, siteLanguage );
  loadClickMe( siteLanguage );

}

// Event listener for the English button
document.getElementById( 'en-btn' ).addEventListener( 'click', function ()
{
  updateSiteLanguage( 'en' ); // Set siteLanguage to English
  loadPageText( pageTitle, 'en' );
  loadPageTitle( pageTitle, 'en' );
  loadClickMe( 'en' );
} );

// Event listener for the French button
document.getElementById( 'fr-btn' ).addEventListener( 'click', function ()
{
  updateSiteLanguage( 'fr' ); // Set siteLanguage to French
  loadPageText( pageTitle, 'fr' );
  loadPageTitle( pageTitle, 'fr' );
  loadClickMe( 'fr' );
} );




function loadPageText ( page, language )
{
  const filePath = `public/data/text_files/${ page }_${ language }.json`;
  console.log( 'page:', page );
  console.log( 'language:', language );

  fetch( filePath )
    .then( response => response.json() )
    .then( data =>
    {
      // Update the page text when the data is loaded
      if ( language === 'en' )
      {
        englishText = data;
        console.log( 'English text loaded:', englishText );
        // console.log( 'pageTitle, pageLang:', pageTitle, pageLang );
        updateText( 'en' );
      } else if ( language === 'fr' )
      {
        frenchText = data;
        console.log( 'French text loaded:', frenchText );
        // console.log( 'pageTitle, pageLang:', pageTitle, pageLang );
        updateText( 'fr' );
      }
    } )
    .catch( error =>
    {
      console.error( 'Error loading JSON data:', error );
    } );
}

function loadPageTitle ( page, language )
{
  const svgElement = document.getElementById( `${ page }-svg` );
  const svgFileName = `public/images/titles/${ page }_${ language }.svg`;
  const svgFileNameMob = `public/images/titles/${ page }_mob_${ language }.svg`;

  // Get the current window width
  const windowWidth = window.innerWidth;

  // Conditionally fetch the appropriate SVG file based on screen size
  let svgFileToFetch;

  if ( windowWidth < 576 )
  {
    svgFileToFetch = svgFileNameMob;
  } else
  {
    svgFileToFetch = svgFileName;
  }

  fetch( svgFileToFetch )
    .then( response => response.text() )
    .then( svgData =>
    {
      svgElement.innerHTML = svgData;
    } );
}

function loadClickMe ( language )
{
  const svgElement = document.getElementById( 'click-me-svg' );
  const svgFileName = `public/images/icons/click_me_${ language }.svg`;

  console.log( 'svgElement:', svgElement );
  console.log( 'svgFileName:', svgFileName );

  fetch( svgFileName )
    .then( response => response.text() )
    .then( svgData =>
    {
      svgElement.innerHTML = svgData;
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
        element.innerHTML = text[ key ];
      }
    }
  }
}


// loadPageText( pageTitle, pageLang );


