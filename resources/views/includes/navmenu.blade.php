<div class="nav-holder">
            <!-- <div class ="header-fade"></div> -->
            <div class="nav-container @yield('menu_item') center-block">
                <div class="nav-item kr-white ">
                    <a href="/">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>KR</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>KR</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-green nav-projects @yield('projects_nav_selected')">
                    <a href="/projects">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>Projects</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>Projects</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-purple nav-comedy @yield('comedy_nav_selected')">
                    <a href="/comedy">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>Comedy</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>Comedy</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-orange nav-football @yield('football_nav_selected')">
                    <a href="/football">
                        <div class="nav-item-top text-uppercase"><div class="fixwidth"><span>Football</span></div></div>
                        <div class="nav-item-bottom text-uppercase"><div class="fixwidth"><span>Football</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-yellow nav-art @yield('art_nav_selected')">
                    <a href="/art">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>Art</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>Art</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-blue nav-personal @yield('personal_nav_selected')">
                    <a href="/personal">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>Personal</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>Personal</span></div></div>
                    </a>
                </div>
                <div class="nav-item kr-red nav-resume @yield('resume_nav_selected')">
                    <a href="/resume">
                        <div class="nav-item-top text-nowrap text-uppercase"><div class="fixwidth"><span>Résumé</span></div></div>
                        <div class="nav-item-bottom text-nowrap text-uppercase"><div class="fixwidth"><span>Résumé</span></div></div>
                    </a>
                </div>
            </div>
        </div>
