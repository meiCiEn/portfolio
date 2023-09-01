const menuCheckBox = document.querySelector( '.menu__checkbox' );
const menu = document.querySelector( '.menu' );
const menuButton = document.querySelector( '.menu__label' );
const ellipsisContainer = 
    document.querySelector('.menu__burger' );
// const menuBars = document.querySelector( '.fa-ellipsis-vertical' );
const menuBars = document.querySelector( '.fa-bars' );
const overlay = document.querySelector('.overlay' );
const overlayClose = document.querySelector('.overlay__close');
const slidingText = document.querySelector('.slide-top');

console.log(`menuCheckBox : ${menuCheckBox}`, `menu : ${menu}`);
console.log(menuCheckBox, menu, menuButton, ellipsisContainer, menuBars, overlay, overlayClose);
menuCheckBox.addEventListener( 'change', function ()
{

    if ( menuCheckBox.checked == true )
    {
        menu.style.overflow = ( 'unset' );
        ellipsisContainer.classList.add('rotate-90');
        ellipsisContainer.style.transition = "all 0.3s ease-out";
        ellipsisContainer.style.transitionDelay = "0.1s";
        overlay.classList.add('open');
        overlayClose.addEventListener('click', function() {
            overlay.classList.remove('open');
            ellipsisContainer.classList.remove('rotate-90');
            menuCheckBox.checked = false;
        })
        anime( {
            targets: '.overlay__menu .slide-up-text',
            translateX: [50, 0],
            translateY: [300, 0],
            easing: 'easeOutCirc',
            // delay: anime.stagger(100), // increase delay by 100ms for each elements.,
            duration: function ( el, i, l )
            {
                return 400 + ( i * 400 );
            },
            delay: 400
        } );
    }
    else if ( menuCheckBox.checked == false )
    {
        menu.style.overflow = ( 'hidden' );
        ellipsisContainer.classList.remove('rotate-90');
        overlay.classList.remove('open');
        anime( {
            targets: '.sliding-menu .slide-up-text',
            translateY: [ 300 ],
            easing: 'easeOutCirc',
            duration: function ( el, i, l )
            {
                return 250 + ( i * 250 );
            },
            delay: (el, i) => 60 * i
        } );
    }
} );
