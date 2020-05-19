<div class="layout__wrapper" id="app">
  <header class="layout__header">
    <div class="header">
      <div class="header__wrapper">

        <div class="header__logo">
          <div class="logo" itemscope itemtype="http://schema.org/Organization">
            <a itemprop="url" href="<?php echo $url; ?>">
              AmiTemplate-Simple
              <!-- <img itemprop="logo" src="<?php echo $img; ?>/logo.png" /> -->
            </a>
          </div>
        </div>

        <div class="header__gnav">
          <nav class="gnav">
            <ul class="gnav__wrapper" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
              <li class="gnav__item" itemprop="name">
                <a href="<?php echo $url; ?>" class="gnav__link home" itemprop="URL">Home</a>
              </li>
              <li class="gnav__item" itemprop="name">
                <a href="<?php echo $url; ?>/column" class="gnav__link column" itemprop="URL">Column</a>
              </li>
              <li class="gnav__item" itemprop="name">
                <a href="<?php echo $url; ?>" class="gnav__link" itemprop="URL">Home</a>
              </li>
              <li class="gnav__item" itemprop="name">
                <a href="<?php echo $url; ?>" class="gnav__link" itemprop="URL">Home</a>
              </li>
              <li class="gnav__item" itemprop="name">
                <a href="<?php echo $url; ?>" class="gnav__link" itemprop="URL">Home</a>
              </li>
            </ul>
          </nav>

          <div class="gnav-slide">
            <nav class="gnav-slide__menu" @click="isSlideNavOpen = !isSlideNavOpen">
              <template v-if="!isSlideNavOpen">
                <i class="material-icons gnav-slide__menu__icon">menu</i>
                <span class="gnav-slide__menu__text">menu</span>
              </template>
              <template v-if="isSlideNavOpen">
                <i class="material-icons gnav-slide__menu__icon">close</i>
                <span class="gnav-slide__menu__text">close</span>
              </template>
            </nav>

            <transition name="gnav-slide-bagckground">
              <div class="gnav-slide__background" v-if="isSlideNavOpen" @click="isSlideNavOpen = !isSlideNavOpen"></div>
            </transition>

            <transition name="gnav-slide-wrapper">
              <ul class="gnav-slide__wrapper" v-if="isSlideNavOpen" v-scroll-lock="isSlideNavOpen">
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link home" itemprop="URL">Home</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>/column" class="gnav-slide__link column" itemprop="URL">Column</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link" itemprop="URL">Home</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link" itemprop="URL">Home</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link" itemprop="URL">Home</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link" itemprop="URL">Home</a>
                </li>
                <li class="gnav-slide__item" itemprop="name">
                  <a href="<?php echo $url; ?>" class="gnav-slide__link" itemprop="URL">Home</a>
                </li>
              </ul>
            </transition>

          </div>
        </div>
      </div>
  </header>
  <main class="layout__main">
    <div class="main">
