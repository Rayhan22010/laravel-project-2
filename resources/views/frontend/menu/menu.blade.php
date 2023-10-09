 <div class="site-mobile-menu site-navbar-target">
     <div class="site-mobile-menu-header">
         <div class="site-mobile-menu-close">
             <span class="icofont-close js-menu-toggle"></span>
         </div>
     </div>
     <div class="site-mobile-menu-body"></div>
 </div>

 <nav class="site-nav">
     <div class="container">
         <div class="menu-bg-wrap">
             <div class="site-navigation">
                 <div class="row g-0 align-items-center">
                     <div class="col-2">
                         <a href="index.html" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
                     </div>
                     <div class="col-8 text-center">
                         <form action="#" class="search-form d-inline-block d-lg-none">
                             <input type="text" class="form-control" placeholder="Search...">
                             <span class="bi-search"></span>
                         </form>

                         <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                             <li class="active"><a href="{{ route('index.page') }}">Home</a></li>
                             <li class="has-children">
                                 <a href="{{ route('blog.page') }}">Blog</a>
                                 <ul class="dropdown">
                                     <li><a href="{{ route('culture.page') }}">Culture</a></li>
                                     <li><a href="{{ route('business.page') }}">Business</a></li>
                                     <li><a href="{{ route('politics.page') }}">Politics</a></li>
                                 </ul>
                             </li>
                             <li><a href="{{ route('about.page') }}">About</a></li>
                             <li><a href="{{ route('contact.page') }}">Contact Us</a></li>

                         </ul>
                     </div>
                     <div class="col-2 text-end">
                         <a href="#"
                             class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                             <span></span>
                         </a>
                         <form action="#" class="search-form d-none d-lg-inline-block">
                             <input type="text" class="form-control" placeholder="Search...">
                             <span class="bi-search"></span>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>
