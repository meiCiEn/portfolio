<!-- </body>
</html> -->
</div> <!-- end of page content -->
</div> <!-- end of page background -->
</div>
</main>
<footer>
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<!-- GreenSock animation library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script type="">

  // Mouse Cursor Animation
  gsap.set(".ball", { xPercent: -50, yPercent: -50 });
  const ball = document.querySelector(".ball");
  const pos = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
  const mouse = { x: pos.x, y: pos.y };
  const speed = 0.08;

  const xSet = gsap.quickSetter(ball, "x", "px");
  const ySet = gsap.quickSetter(ball, "y", "px");

  window.addEventListener("mousemove", (e) => {
    mouse.x = e.x;
    mouse.y = e.y;
  });
  gsap.ticker.add(() => {
    const dt = 1.0 - Math.pow(1.0 - speed, gsap.ticker.deltaRatio());
    pos.x += (mouse.x - pos.x) * dt;
    pos.y += (mouse.y - pos.y) * dt;
    xSet(pos.x);
    ySet(pos.y);
  });
</script>
<script src="public/scripts/anime.min.js"></script>
<script src="public/scripts/animations.js"></script>
<script src="public/scripts/menu.js"></script>
<script src="public/scripts/tabs.js"></script>
<script src="public/scripts/form.js"></script>
<script src="public/scripts/reload_on_resize.js"></script>
<!-- <script src="public/scripts/intersection.js"></script> -->

<!-- JS for toggling between languages -->
<script src="public/scripts/language_toggle.js"></script>


<script>
  const wrapperList = [...document.querySelectorAll('.wrapper svg')];




  function draw() {
    let wrappers = document.querySelectorAll('.wrapper svg');
    [...wrappers].forEach(wrapper => {
      console.log(wrapper);
      wrapper.classList.add('active');
    });
  }

  setTimeout(draw, 300)
</script>


<!-- particles background -->
<script src="public/scripts/particles-config.js"></script>

<!-- Debugging: Output variable values -->
<script>
    console.log("Background Color: <?php echo $backgroundColor; ?>");
    console.log("Background Image: <?php echo $backgroundImage; ?>");
</script>





</body>

</html>