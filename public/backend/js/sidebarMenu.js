document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
<<<<<<< HEAD
    nav.classList.toggle('show')
=======
    nav.classList.toggle('showSider')
>>>>>>> refs/remotes/origin/master
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
<<<<<<< HEAD
=======
    });

    document.addEventListener("DOMContentLoaded", function(){
        var btn = document.getElementById("myBtn");
        var element = document.getElementById("myAlert");
    
        // Create alert instance
        var myAlert = new bootstrap.Alert(element);
    
        btn.addEventListener("click", function(){
            myAlert.close();
        });
>>>>>>> refs/remotes/origin/master
    });