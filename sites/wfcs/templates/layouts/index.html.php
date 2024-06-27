---
@layout: template://pages/document.html
---


<ktml:style src="theme://css/swiper-bundle.min.css" rel="preload" as="style" />
<ktml:style src="theme://css/animate.css" rel="preload" as="style" />
<ktml:style src="theme://css/output.min.css" rel="preload" as="style" />

<ktml:script src="theme://js/wow.min.js" />
<ktml:script src="theme://js/swiper-bundle.min.js" />

<ktml:script src="theme://js/main.js" defer />

<body class="antialiased bg-gray-100<?= isset(layout()->pageclass) ? ' ' . layout()->pageclass : '' ?>">
    <ktml:content>
</body>