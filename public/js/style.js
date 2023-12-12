//header js
let adm = document.querySelectorAll(".adm");
let navlink = document.querySelectorAll(".nav-link");
let url = window.location;

let navbarbrand = document.querySelector(".navbar-brand");

let logout = document.querySelector(".logout");
logout.style.display="none";

let login = document.querySelector(".login");
//------------------ fin


//console.log("taille : ..."+ adm.length); 
    if(url == "http://localhost/EXAMEN/#" || url == "http://localhost/EXAMEN/"){
      
        for (let index = 0; index < adm.length; index++) {
        
            adm[index].style.display="none";
            //console.log(adm[index]);  
        };       
    }

    else if(url == "http://localhost/EXAMEN/views/login.php"){
        //document.querySelector(".login").style.display ="none";
        
        login.style.display="none";

         for (let index = 0; index < adm.length; index++) {
       
            adm[index].style.display="none";
            //console.log(adm[index]);  
            if(index == 0){navlink[index].textContent ="login"}
            if(index == 1){navlink[index].style.display ="none"}
            
        };    
       
    }
    else if(url == "http://localhost/EXAMEN/views/dashboard.php"){

    //document.querySelector(".btnLogin").style.display ="none";
    //affiche le button logout
    logout.style.display="block";

    navbarbrand.style.display="none"

    login.style.display="block";
    login.textContent ="Recherche";

    for (let index = 0; index < adm.length; index++) {
        //affiche
        adm[index].style.display="block";
        
        //change la valeur
        if(index == 0){
            
            navlink[index].textContent ="Dashboard";
            
        }
        //caché
        if(index == 1){
            navlink[index].style.display ="none";
        }     
     };

    }

    // DASHBOARD -----------------------
   
    // let adm_contents = document.querySelectorAll(".adm_contents");
    // adm_contents[0].style.display="block";
    // //navlink[1].classList.add('active');


    // for (let index = 1; index < adm_contents.length; index++) {
    //     //affiche
    //     adm_contents[index].style.display="none";
              
    //  };

// equipe------------------

let updateButton = document.getElementById("updateButton");
    updateButton.addEventListener("click", ()=>{
    console.log(this.updateButton);
    console.log("bonjour")
    
})