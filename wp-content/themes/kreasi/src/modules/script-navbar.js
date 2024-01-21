import $ from 'jquery';

class scriptNavbar{
    constructor(){
        this.events();
    }
    events(){
        $(document).ready(function(){
            alert("hello world from script navbar");
        });
    }

}

export default scriptNavbar;