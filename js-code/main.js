
let toggleStatus = false;


let toggleNav = function(){
    
    let getSidebar = document.querySelector(".nav-sidebar");
    let getSidebarUl = document.querySelector(".nav-sidebar ul");
    let getSidebarTitle = document.querySelector(".nav-sidebar span");
    let getSidebarLinks = document.querySelectorAll(".nav-sidebar a")

    if (toggleStatus == false){
        getSidebarUl.style.visibility="visible";
        getSidebarTitle.style.opacity = 1;
        getSidebar.style.width = "300px";
        

        let arrayLenth = getSidebarLinks.length;

        for(let i = 0; i < arrayLenth; i++){
            getSidebarLinks[i].opacity = 1;
        }

        toggleStatus = true;
    } else if (toggleStatus == true){
        getSidebar.style.width = "50px";
       
        let arrayLenth = getSidebarLinks.length;

        for(let i = 0; i < arrayLenth; i++){
            getSidebarLinks[i].opacity = 0.1;
        }
        getSidebarUl.style.visibility="hidden";
        getSidebarTitle.style.opacity = 0;
        toggleStatus = false;
    }
}