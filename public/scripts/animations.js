anime.timeline( { loop: false } )
  .add( {
    targets: '.ml15 .word',
    scale: [ 14, 1 ],
    opacity: [ 0, 1 ],
    easing: "easeOutCirc",
    duration: 800,
    delay: ( el, i ) => 800 * i
  } );


anime( {
  targets: '.slide-up-left',
  translateX: [
    { value: 20, duration: 0, delay: 700 },
    { value: 0, duration: 700, delay: 700 }
  ],
  translateY: [
    { value: 300, duration: 0, delay: anime.stagger( 200, { start: 800 } ) },
    { value: 0, duration: 500, delay: 100 }
  ],



  easing: 'easeOutCirc',
  duration: function ( el, i, l )
  {
    return 200 + ( i * 200 );
  },
  // increase delay by 100ms for each elements.,
  // delay: 100
} );

anime( {
  targets: '.slide-up-text',
  translateY: [
    { value: 300, duration: 0, delay: anime.stagger( 100, { start: 100 } ) },
    { value: 0, duration: 600, delay: 100 }
  ],


  easing: 'easeOutCirc',
  duration: function ( el, i, l )
  {
    return 300 + ( i * 300 );
  }
} );

anime( {
  targets: '.slide-up-text-1',
  translateY: [
    { value: 300, duration: 0, delay: anime.stagger( 100, { start: 100 } ) },
    { value: 0, duration: 600, delay: 100 }
  ],


  easing: 'easeOutCirc',
  duration: function ( el, i, l )
  {
    return 300 + ( i * 300 );
  }
} );



anime( {
  targets: '.line',
  opacity: [ 0, 1 ],
  easing: 'easeOutCirc',
  delay: 2000,
  duration: 2000
  // increase delay by 100ms for each elements.,
  // delay: 100
} );

anime( {
  targets: '.title-backdrop',
  translateY: [
    { value: -1000, duration: 0, delay: anime.stagger( 200, { start: 0 } ) },
    { value: 0, duration: 400, delay: 100 }
  ],
  easing: 'easeOutCirc'
  // increase delay by 100ms for each elements.,
  // delay: 100
} );

anime( {
  targets: '.slide-page-up',
  translateY: [
    { value: 2000, duration: 0, delay: 0 },
    { value: 0, duration: 400, delay: 100 }
  ],
  easing: 'easeOutCirc'
} );

anime( {
  targets: '.slide-page-down',
  translateY: [
    { value: -2000, duration: 0, delay: 0 },
    { value: 0, duration: 400, delay: 100 }
  ],
  easing: 'easeOutCirc'
  // increase delay by 100ms for each elements.,
  // delay: 100
} );

// Get a reference to the element with the ID "bullet-link-trigger"
const bulletLinkTrigger = document.getElementById('bullet-link-trigger');

// Add a mouseover event listener to the element
bulletLinkTrigger.addEventListener('mouseenter', (event) => {

  // Wrap every letter in a span
let textWrapper = document.querySelector('.bullet-link .bullet-link-letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='bullet-link-letter'>$&</span>");

  console.log(bulletLinkTrigger);
  anime.timeline({ loop: false })
    .add({
      targets: '.bullet-link .bullet-link-letter',
      rotateX: {
        value: [0, -360],
        duration: 1300,
        easing: "easeOutExpo",
        delay: (el, i) => 45 * i
      },
    });
});

// Get a reference to the element with the ID "bullet-link-trigger"
const bulletLink1Trigger = document.getElementById('bullet-link-1-trigger');

// Add a mouseover event listener to the element
bulletLink1Trigger.addEventListener('mouseenter', (event) => {

  // Wrap every letter in a span
let textWrapper = document.querySelector('.bullet-link .bullet-link-1-letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='bullet-link-1-letter'>$&</span>");

  console.log(bulletLink1Trigger);
  anime.timeline({ loop: false })
    .add({
      targets: '.bullet-link .bullet-link-1-letter',
      rotateX: {
        value: [0, -360],
        duration: 1300,
        easing: "easeOutExpo",
        delay: (el, i) => 45 * i
      },
    });
});

// Get a reference to the element with the ID "bullet-link-trigger"
const bulletLink2Trigger = document.getElementById('bullet-link-2-trigger');

// Add a mouseover event listener to the element
bulletLink2Trigger.addEventListener('mouseenter', (event) => {

  // Wrap every letter in a span
let textWrapper = document.querySelector('.bullet-link .bullet-link-2-letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='bullet-link-2-letter'>$&</span>");

  console.log(bulletLink1Trigger);
  anime.timeline({ loop: false })
    .add({
      targets: '.bullet-link .bullet-link-2-letter',
      rotateX: {
        value: [0, -360],
        duration: 1300,
        easing: "easeOutExpo",
        delay: (el, i) => 45 * i
      },
    });
});
