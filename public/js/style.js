
let adm = document.querySelectorAll(".adm");
let accueil = document.querySelectorAll(".index");
let url = window.location;

console.log("taille : ..."+ adm.length); 
if(url == "http://localhost/EXAMEN/"){

    
    for (let index = 0; index < adm.length; index++) {
        //const element = array[index];
        adm[index].style.display="none";
        //console.log(adm[index]);  
    };
}
else{
    document.querySelector(".login").style.display ="none";
    for (let index = 0; index < adm.length; index++) {
        //affiche
        adm[index].style.display="block";
        
        //change la valeur
        if(index == 0){
            accueil[index].textContent ="Dashboard";
        }
        //caché
        if(index == 1){
            accueil[index].style.display ="none";
        }

        console.log(accueil[index]);
         
    };
}

