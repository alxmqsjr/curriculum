<style type="text/css">

/*Para configurar as mudanças de cores da página*/
    
.bg-primary, .btn-primary {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
} 

.resume-section .text-primary, .resume-section .resume-section-link  {
    color: <?php echo get_theme_mod('cr_color'); ?> !important;
}
.resume-section .social-icons .social-icon:hover {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.btn-primary.disabled, .btn-primary:disabled, .btn-outline-primary:hover, {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.navbar-dark .navbar-nav .menu-item a,   .navbar-dark .navbar-nav .nav-link {
    color: <?php echo get_theme_mod('cr_color_menu'); ?> !important;
}

.navbar-dark .navbar-nav .menu-item a:hover, .navbar-dark .navbar-nav .menu-item a:focus,
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: <?php { echo get_theme_mod('cr_color_menu_hover');?> !important;  <?php } ?>
}

.navbar-dark .navbar-nav .show > .menu-item a,     
.navbar-dark .navbar-nav .active > .menu-item a,
.navbar-dark .navbar-nav .menu-item a.show,
.navbar-dark .navbar-nav .menu-item a.active {
    color: <?php { echo get_theme_mod('cr_color_menu_hover');?> !important;  <?php } ?>
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
    color: <?php { echo get_theme_mod('cr_color_menu_hover');?> !important;  <?php } ?>
}

.dropdown-item.active, .dropdown-item:active {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.custom-control-input:checked ~ .custom-control-label::before, 
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before, 
.custom-range::-webkit-slider-thumb, .custom-range::-moz-range-thumb, .custom-range::-ms-thumb {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.page-item.active .page-link, .badge-primary, .progress-bar, .list-group-item.active {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.border-primary, .btn-primary, .btn-outline-primary, .btn-primary.disabled, .btn-primary:disabled, .btn-outline-primary:hover {
    border-color: <?php echo get_theme_mod('cr_color'); ?> !important;
} 

.custom-control-input:checked ~ .custom-control-label::before, .page-item.active .page-link, .list-group-item.active {
    border-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.btn-outline-primary, .btn-link, .page-link {
    color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, 
.btn-outline-primary:not(:disabled):not(.disabled).active, 
.show > .btn-outline-primary.dropdown-toggle {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
    border-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.nav-pills .menu-item a.active,
.nav-pills .show > .menu-item a,
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
    background-color: <?php echo get_theme_mod('cr_color'); ?> !important;
}

.text-warning {
    color: <?php echo get_theme_mod('cr_color_award'); ?> !important;   
}
    
</style>