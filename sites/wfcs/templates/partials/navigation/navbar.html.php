<?
$text_colour = (layout()->pageclass == 'landing') ? 'lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 ' : '';
$root = (layout()->pageclass == 'landing') ? '' : '/';
?>

<nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
  <ul class="blcok lg:flex 2xl:ml-20">
    <li class="group relative">
      <a href="<?= $root ?>#home" class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 <?= $text_colour ?>"> Home </a>
    </li>
    <li class="group relative">
      <a href="<?= $root ?>#about" class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 <?= $text_colour ?>xl:ml-10"> About </a>
    </li>
    <li class="group relative">
      <a href="<?= $root ?>#popular" class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 <?= $text_colour ?>xl:ml-10"> Popular Sports </a>
    </li>
    <li class="group relative">
      <a href="<?= $root ?>#team" class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 <?= $text_colour ?>xl:ml-10"> Coaching Team </a>
    </li>
    <li class="group relative">
      <a href="<?= $root ?>#contact" class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 <?= $text_colour ?>xl:ml-10"> Contact </a>
    </li>
  </ul>
</nav>
<script data-inline>
  // ==== for menu scroll
  const pageLink = document.querySelectorAll(".ud-menu-scroll");

  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {

      <?= (layout()->pageclass == 'landing') ? 'e.preventDefault();' : '' ?>
      
      document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  });

  // section menu active
  function onScroll(event) {
    const sections = document.querySelectorAll(".ud-menu-scroll");
    const scrollPos =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
      const currLink = sections[i];
      const val = currLink.getAttribute("href");
      const refElement = document.querySelector(val);
      const scrollTopMinus = scrollPos + 73;
      if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document
          .querySelector(".ud-menu-scroll")
          .classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }

  window.document.addEventListener("scroll", onScroll);
</script>