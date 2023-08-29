// Create the default intersection observer function
// It's an in-built function in JavaScript that is responsible for creating an observer that we can then use to observe our target element
// has two parameters that take in two arguments.

    // 1. Callback function that is called when there is an intersection with the observed element. (A callback function is a normal function that is passed to another function as that function's argument);

// 2. object containing options to customize the observer (optional)

// select target you want to observe
const section =  document.querySelector(`.project__info`);

// thing you want to change on intersection
const backArrow = document.querySelector(`.back--project svg`);

const projectTitle = document.querySelector(`.project__title`);

console.log(backArrow);

const objOptions = {
    root: null,
     // what exact root element we want our observed element to intersect against. Null is intersection with browser window itself.
    threshold: 0.5, // percentage of the observed target that should come into view before it can be considered an intersection.
    rootMargin: "",
  }

// create an observer to observe this section element.

const sectionObserver = new IntersectionObserver(callBackFunction, objOptions);

// Tell the observer what target element to observe using its built-in observe() method on the observer.
// This method receives the target element to be observed as its argument.

sectionObserver.observe(projectTitle);

// put 
function callBackFunction(entries) {
  // deconstruct (extract the object in) the array and store it in an entry variable to make it easier to directly access the properties of interest stored in that object.
  const [entry] = entries;
  if (entry.isIntersecting) {
    backArrow.style.fill = "#fbeff5";
  } else {
    backArrow.style.fill = "#22262A";
  }
}


