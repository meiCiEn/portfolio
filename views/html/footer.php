<!-- </body>
</html> -->
        </div> <!-- end of page content -->
      </div> <!-- end of page background -->
    </main>
<footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script src="public/scripts/anime.min.js"></script>
    <script src="public/scripts/animations.js"></script>
    <script src="public/scripts/menu.js"></script>
    <script src="public/scripts/tabs.js"></script>
    <script src="public/scripts/form.js"></script>
    <script src="public/scripts/intersection.js"></script>

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


  </body>
</html>