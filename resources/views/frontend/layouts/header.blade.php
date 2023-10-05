<header id="masthead" class="site-header show-for-large" role="banner">
    <div class="menu__wrapper--desktop row sr">
        <div class="logo__wrapper columns large-4 medium-3">
            <a href="/" rel="home">
                <img class="header-logo--desktop" style="width: 190px; height: 75px;"
                    src="{{ asset('assets/frontend/images/logo/logo-the-law-counsel.png') }}">
            </a>
        </div>
        <div class="columns large-12 icons__container">
            <ul class="desktop__menu--icons-list show-for-large">
                <li class="tag__text">
                    <a href="#">
                        <!-- <div class="contact desktop__menu__icon__single">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 42.37 39.53">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #221f1f;
                                            stroke-linejoin: round;
                                            stroke-width: 9px;
                                        }
                                    </style>
                                </defs>
                                <title>+8801712020233</title>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1"
                                            d="M39.87,17.75C39.87,26.17,31.51,33,21.19,33a22.43,22.43,0,0,1-6.55-1L3.9,37l4.21-8.39A14,14,0,0,1,2.5,17.75C2.5,9.33,10.87,2.5,21.19,2.5S39.87,9.33,39.87,17.75Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div> -->
                        <i style="font-size: 11px;" class="fas fa-phone" aria-hidden="true"></i>
                        +8801712020233
                    </a>
                </li>
                <li class="tag__text">
                    <a href="javascript:void(0)">
                        <!-- <div class="search desktop__menu__icon__single">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 46.21 46.21">
                                <title>info@thelawcounsel.com</title>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="icons">
                                        <circle class="cls-1" cx="19" cy="19" r="16"></circle>
                                        <line class="cls-2" x1="30.35" y1="30.27" x2="43.21" y2="43.21"></line>
                                    </g>
                                </g>
                            </svg>

                        </div> -->
                        <i style="font-size: 12px;" class="fas fa-envelope" aria-hidden="true"></i>
                        info@thelawcounsel.com
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu__inner-wrapper--desktop columns large-8 medium-9 desktop__menu__wrapper">
            <ul id="menu-main-navigation" class="menu dropdown menu desktop-menu" data-dropdown-menu="">
                <!-- <li class="menu-item menu-item-has-children">
                    <a href="pro-bono/index.htm">About</a>
                    <ul class="dropdown menu vertical" data-toggle="">
                        <li id="menu-item-290"
                            class="menu-item menu-item-290"><a
                                href="pro-bono/our-commitment/index.htm">Our Commitment</a></li>
                        <li id="menu-item-291"
                            class="menu-item menu-item-291"><a
                                href="pro-bono/pro-bono-resources/index.htm">Pro Bono Resources</a></li>
                        <li id="menu-item-289"
                            class="menu-item menu-item-289"><a
                                href="pro-bono/awards-accolades/index.htm">Awards &#038; Accolades</a></li>
                    </ul>
                </li> -->
                <!-- <li id="menu-item-23"
                    class="menu-item menu-item-has-children menu-item-23">
                    <a href="foundation/index.htm">Foundation</a>
                    <ul class="dropdown menu vertical" data-toggle="">
                        <li id="menu-item-281"
                            class="menu-item menu-item-281"><a
                                href="foundation/a-message-from-the-foundation-president/index.htm">A Message from
                                the Foundation President</a></li>
                        <li id="menu-item-282"
                            class="menu-item menu-item-282"><a
                                href="foundation/community-grants/index.htm">Community Grants</a></li>
                        <li id="menu-item-283"
                            class="menu-item menu-item-283"><a
                                href="foundation/relationship-grants/index.htm">Relationship Grants</a></li>
                    </ul>
                </li> -->
                <li class="menu-item {{ request()->is('about') ? 'active' : '' }}">
                    <a href="/about">About</a>
                </li>
                <li class="menu-item {{ request()->is('people') ? 'active' : '' }}">
                    <a href="/people">People</a>
                </li>
                {{-- <li class="menu-item menu-item-has-children">
                    <a href="/people">People</a>
                    <ul class="dropdown menu vertical" data-toggle="">
                        <li class="menu-item"><a href="people/pro-bono-committee/index.htm">Head Of Chambers</a></li>
                        <li class="menu-item menu-item-287"><a
                                href="people/foundation-board-of-directors/index.htm">Partners</a></li>
                        <li class="menu-item"><a href="people/director/index.htm">Senior Associates</a></li>
                        <li class="menu-item"><a href="people/director/index.htm">Associates</a></li>
                        <li class="menu-item"><a href="people/director/index.htm">Junior Associates</a></li>
                        <li class="menu-item"><a href="people/director/index.htm">Research Associates</a></li>
                        <li class="menu-item"><a href="people/director/index.htm">Pupil</a></li>
                    </ul>
                </li> --}}
                <li class="menu-item {{ request()->is('practices-areas') ? 'active' : '' }}">
                    <a href="/practices-areas">Practice Areas</a>
                </li>
                <li class="menu-item {{ request()->is('resources') ? 'active' : '' }}">
                    <a href="/resources">Resources</a>
                </li>
                <li class="menu-item {{ request()->is('recognition') ? 'active' : '' }}">
                    <a href="/recognition">Recognition</a>
                </li>
                <li class="menu-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="/contact">Contact</a>
                </li>

                <!-- <li id="menu-item-21"
                    class="menu-item menu-item-has-children menu-item-21">
                    <a href="people/index.htm">People</a>
                    <ul class="dropdown menu vertical" data-toggle="">
                        <li id="menu-item-288"
                            class="menu-item menu-item-288"><a
                                href="people/pro-bono-committee/index.htm">Pro Bono Committee</a></li>
                        <li id="menu-item-287"
                            class="menu-item menu-item-287"><a
                                href="people/foundation-board-of-directors/index.htm">Foundation Board of
                                Directors</a></li>
                        <li id="menu-item-286"
                            class="menu-item menu-item-286"><a
                                href="people/director/index.htm">Director of Pro Bono</a></li>
                    </ul>
                </li>
                <li id="menu-item-20"
                    class="menu-item menu-item-has-children menu-item-20">
                    <a href="news/index.htm">News</a>
                    <ul class="dropdown menu vertical" data-toggle="">
                        <li id="menu-item-285"
                            class="menu-item menu-item-285"><a
                                href="news/press-releases/index.htm">Press Releases</a></li>
                        <li id="menu-item-284"
                            class="menu-item menu-item-284"><a
                                href="news/newsletters/index.htm">Newsletters</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</header>
