import $ from 'jquery';

class scriptNavbar {
    constructor() {
        this.events();
    }

    events() {
        $(document).ready(() => {
            // Toggle dropdown-menu on click
            $('.main-menu .dropdown-toggle').on('click', function (e) {
                e.preventDefault();
                // Close other dropdown-menus within the same level
                $(this).closest('.menu-item-has-children').siblings('.menu-item-has-children').find('.dropdown-menu').removeClass('show');
                // Toggle class for the clicked dropdown-menu
                $(this).closest('.menu-item-has-children').find('.dropdown-menu').toggleClass('show');
            });
            

            // Close dropdown-menus when clicking outside of them
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.main-menu .dropdown').length) {
                    $('.main-menu .dropdown .dropdown-menu').removeClass('show');
                }
            });

            // Prevent closing the dropdown-menu when clicking inside it
            $('.main-menu .dropdown-menu').on('click', function (e) {
                e.stopPropagation();
            });
        });
    }
}

export default scriptNavbar;
