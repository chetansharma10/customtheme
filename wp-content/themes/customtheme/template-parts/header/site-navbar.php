 <!-- Including Nav Menus -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <?php

        $config = [
          "theme_location" => "inside_header",
          "container" =>false,
          
          "menu_class" =>"navbar-nav me-auto mb-2 mb-lg-0",
          "add_li_class"=>"nav-item",
          "add_li_a_class"=>"nav-link",
          "add_sub_menu_ul_class"=>"dropdown-menu",
        ];
        wp_nav_menu($config);

        ?>

     </div>
   </div>
 </nav>