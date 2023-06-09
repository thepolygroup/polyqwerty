<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- META General -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="og:type" content="website"/>
    <meta name="author"  content="The Poly Group"/>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#fe30b8">
    <meta name="msapplication-TileColor" content="#fe30b8">
    <meta name="theme-color" content="#fe30b8">

    <!-- CSS General -->
    <link rel="stylesheet" href="https://polynucleus.com/styles.css">
    <link rel="stylesheet" href="app/css/styles.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://polynucleus.com/styles.css" type="text/css">
    
    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Poly Qwerty"/>
    <meta property="og:url" content="https://polyqwerty.com"/>
    <meta name="keywords" content="" />
    <meta name="description" property="og:description" content="" />
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Poly Qwerty" />
    <meta name="twitter:creator" content="@ThePolyGroupCo">
    <meta name="twitter:title" content="Your keyboard's assistant" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->
      
    <script type="module">
      import data from './data.js';

      const buttons = document.getElementById('buttons');
      data.forEach( button => {
        let btn = document.createElement('button');

        btn.innerHTML = button.text;
        btn.className = 'key';
        btn.id = button.id;
        btn.title = button.title;

        buttons.appendChild(btn);
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.getElementsByClassName('key-section')[0].querySelectorAll('button');

        buttons.forEach(button => {
          button.addEventListener('click', e => {
            e.preventDefault();
            navigator.clipboard.writeText(button.innerText);
          });
        });
      });
    </script>
  </head>
  <body class="light-mode">
    <header>
      <img alt="Poly Qwerty" src="imgs/polyqwerty.svg" height="35px" width="auto" />
      <a id="github" href="https://github.com/The-Poly-Group/polyqwerty" target="_blank">
        <img alt="Github" src="imgs/github.svg" />
        open-source
      </a>
    </header>
    <div class="container">
      <h1 class="heading-1 align-center">Your keyboard’s assistant</h1>
      <h2 class="caption align-center"><span id="click">Click</span> on a character to copy it</h2>
      
      <section id="diacritics">
        <h2 class="heading-1">Diacritics</h2>
        <hr class="new align-center">
        <div class="key-section" id="buttons"></div>
      </section>
    </div>
  </body>
</html>