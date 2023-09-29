function openSkills(evt, skillName) {
    // Declare all variables
    let i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(skillName).style.display = "block";
    evt.currentTarget.className += " active";

    // remove "bottom-rounded" class from .tab
    let tab = document.getElementById("tab");
    tab.classList.remove("bottom-rounded");
    

    // TAB ANIMATION

anime.timeline()
  .add({
    targets: '.skills__wrapper .skill-1',
    scale: [0, 1],
    duration: 1500,
    elasticity: 200,
    delay: (el, i) => 800 + (45 * (i+1))
  });

  anime.timeline()
  .add({
    targets: '.skills__wrapper .skill-2',
    scale: [0, 1],
    duration: 1500,
    elasticity: 200,
    delay: (el, i) => 800 + (45 * (i+1))
  });

  anime.timeline()
  .add({
    targets: '.skills__wrapper .skill-3',
    scale: [0, 1],
    duration: 1500,
    elasticity: 200,
    delay: (el, i) => 800 + (45 * (i+1))
  });

  anime.timeline()
  .add({
    targets: '.skills__wrapper',
    scaleY: [0, 1],
    duration: 300,
    easing: 'easeInOutCirc',
    delay: 400
  });

  let currentSkill =     document.getElementById(skillName);
//   console.log(currentSkill);




function closeSkills() {
    // stop displaying tab content
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
            // add "bottom-rounded" class to .tab
    let tab = document.getElementById("tab");
    tab.classList.add("bottom-rounded");
    }
        

let currentSkillChildren = currentSkill.children;
// console.log(currentSkillChildren, currentSkillChildren[1]);
currentSkillChildren[1].addEventListener("click", closeSkills);

}
