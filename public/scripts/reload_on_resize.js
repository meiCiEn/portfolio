function reloadPageOnResize() {
    const thresholdWidth = 576; // Adjust this to your desired threshold
  
    // Listen for window resize events
    window.addEventListener('resize', () => {
      if (window.innerWidth < thresholdWidth) {
        // Reload the page if the width is below the threshold
        location.reload();
      }
    });
  }
  
  // Call the function to start listening for resize events
  reloadPageOnResize();
  