<header class="layout__header">
  <div class="header">
    <div class="header__wrapper">
      <div class="header__logo">
        <div class="logo" itemscope itemtype="http://schema.org/Organization">
          <a itemprop="url" href="<?php echo $url; ?>">
            amiten-plate
            <!-- <img itemprop="logo" src="assets/img/logo.png" /> -->
          </a>
        </div>
      </div>

      <div class="header__gnav">
        <nav class="gnav">
          <ul class="gnav__wrapper" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
            <li class="gnav__item" itemprop="name">
              <a href="" class="gnav__link home" itemprop="URL">Home</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="element/" class="gnav__link element" itemprop="URL">Element</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="form/" class="gnav__link form" itemprop="URL">Form</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="components/" class="gnav__link components" itemprop="URL">Components</a>
            </li>
            <li class="gnav__item" itemprop="name">
              <a href="test/" class="gnav__link" itemprop="URL">Test</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="header__slide-nav" id="slide-nav">
        <the-slide-nav-menu></the-slide-nav-menu>
        <the-slide-nav></the-slide-nav>
      </div>

    </div>
</header>
<main class="layout__main">
