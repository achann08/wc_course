import $ from 'jquery';

class scriptNavbar {
    constructor() {
        this.events();
    }

    events() {
        $(document).ready(() => {
            $('.main-menu .dropdown-toggle').on('click', function (e) {
                e.preventDefault();

                $(this).closest('.menu-item-has-children').
                siblings('.menu-item-has-children').
                find('.dropdown-menu').removeClass('show');
                
                var dropdownMenu = $(this).closest('.menu-item-has-children').find('.dropdown-menu');
                var mainDropdown = dropdownMenu.first();

                mainDropdown.toggleClass('show', function() {
                    if ($(this).css("display") == 'none') {
                        dropdownMenu.hide();
                    }
                });                       
            });
            
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.main-menu').length) {
                    $('.dropdown-menu').removeClass('show');
                }
            });
        });
    }
}

export default scriptNavbar;
