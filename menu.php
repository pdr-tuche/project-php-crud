
  <section class="nav">
    <h1 id="titulo-taylor">Taylor's Experience</h1>
    <h3 class="span loader">
      <span class="m">T</span>
      <span class="m">H</span>
      <span class="m">E</span>
      <span class="m">&nbsp;</span>
      <span class="m">E</span>
      <span class="m">R</span>
      <span class="m">A</span>
      <span class="m">S</span>
      <span class="m">&nbsp;</span>
      <span class="m">T</span>
      <span class="m">O</span>
      <span class="m">U</span>
      <span class="m">R</span>
    </h3>
    <div class="nav-container">
      <a class="nav-tab" href="?pg=albums">ALBUMS/SHOWS</a>
      <a class="nav-tab" href="?pg=feature">FEATURE</a>
      <a class="nav-tab" href="?pg=team">TEAM</a>
      <a class="nav-tab" href="?pg=faq">FAQ</a>
      <a class="nav-tab" href="?pg=product">MERCHANDISING</a>
      <span class="nav-tab-slider"></span></div>
  </section>
  
  <script>
    document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');

  for (const link of links) {
    link.addEventListener("click", scrollToSection);
  }

  function scrollToSection(e) {
    e.preventDefault();
    const targetId = e.currentTarget.getAttribute("href").substring(1);
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      const offsetTop = targetElement.offsetTop;
      window.scrollTo({
        top: offsetTop,
        behavior: "smooth",
      });
    }
  }
});

  </script>

  <canvas class="background"></canvas>



  


