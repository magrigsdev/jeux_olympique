//header js
let adm = document.querySelectorAll(".adm");
let navlink = document.querySelectorAll(".nav-link");
let url = window.location;

let navbarbrand = document.querySelector(".navbar-brand");

let logout = document.querySelector(".logout");
logout.style.display="none";

let login = document.querySelector(".login");
//------------------ fin
//pour laffichage des views dans admin
function showDashboard(){
    
    //document.querySelector(".btnLogin").style.display ="none";
    //affiche le button logout
    logout.style.display="block";

    navbarbrand.style.display="none"

    login.style.display="block";
    login.textContent ="Recherche";

    for (let index = 0; index < adm.length; index++) {
        
        //affiche
        adm[index].style.display="none";
        
        //change la valeur
        if(index == 0){          
            navlink[index].textContent ="Dashboard";           
        }


        // caché
        if(index == 1){
            navlink[index].style.display ="none";
        }     
     };
}

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
    else if(url == "http://localhost/EXAMEN/views/dashboard.php" || url == "http://localhost/EXAMEN/views/viewupdate.php"){

    showDashboard()
    }

    // -----------------------  RUNNING ------------------------------------------

    // DASHBOARD -----------------------http://localhost/EXAMEN/views/viewequipe.php
   
    // let adm_contents = document.querySelectorAll(".adm_contents");
    // let navclik = document.querySelectorAll(".navclik");
    // let index = 0;

    // navclik.forEach(item =>{

    //     item.addEventListener('click', ()=>{
    //         console.log(item)
    //     })
    // })
    
    // let navlinks = Array;
    // let i = 0;
    // //adm_contents[0].style.display="block";
    // //navlink[1].classList.add('active');

    // for (let index = 0; index < navclik.length; index++) {
    //     //affiche
    //     //navclik[index].style.display="none";
    //     console.log(navclik[index]);         
    //  };

    // //  for (let index = 2; index < navlink.length; index++) {
    // //     navlinks[i] = navlink[index];
    // //     //const element = navlink[index];
        
    // //     navlink[index].addEventListener("click", ()=>{
            
    // //         navlink[index].style.display="block";
    // //     })
    // //     console.log(i+" tab "+navlinks[i] );
    // //     //alert(navlink[index]);
    // //     i++;
        
    // // }


 

    //  let c_equipes = adm_contents[0];
    //  let c_personnel = adm_contents[1];
    //  let c_matches = adm_contents[2];
    //  let c_affiche = adm_contents[3];

    // //  for (let index = 2; index < navlink.length; index++) {
    // //     //const element = navlink[index];
        
    // //     navlink[index].addEventListener("click", ()=>{
    // //         console.log(navlink[index]);
    // //         console.log("navlink[index]");
    // //     })
        
    // //  }
    // let on_equipes = navlink[2];
    // let on_personnel = navlink[3];
    // let on_matches = navlink[4];
    // let on_affiche = navlink[5];

    // on_equipes.addEventListener("click", ()=>{
            
    //     adm_contents[0].style.display="block";
    //     })

    // // on_equipes.addEventListener("click", ()=>{
    // //     console.log("hello");
    // //     alert("hello");
    // // })

    // // for (let index = 2; index < navlink.length; index++) {
    // //     //const element = navlink[index];
    // //     navlink[index].addEventListener("click", ()=>{
            
    // //         alert(navlink[index].style.fontWeight);
    // //     })

    // //     //alert(navlink[index]);
        
    // // }
    // console.log(on_equipes);        
      
    
// equipe------------------
