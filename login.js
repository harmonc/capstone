"use strict";

//Anonymous function wrapper to hide the names inside this file from anyone outside of this file "Module style"
(function (){
    
    window.addEventListener("load", init);

    function init(){
        id("log").addEventListener("click", buttonClicked);  
        
        
        
    }

    function passwordCheck(pass, Uname){
        if(pass == "123" && Uname == "Judy"){
            return true;
        }else{
            return false;
        }
        
    }

    function buttonClicked(){

        if(passwordCheck(id("Pass").value.toString(), id("Uname").value.toString())){
            window.open("http://transerve.obu.edu/viewer.php", "_self"); 
            //window.close();     
        } else{
            console.log("failed");
        }

        console.log(id("Pass").value);
        console.log(id("Uname").value);
        console.log("in button clicked");
    }


    //Helper functions
    function id(id_name){
        return document.getElementById(id_name);
    }
})();