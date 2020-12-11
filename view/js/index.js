let link_signin= document.querySelector("#signIn");
let link_lostpwd= document.querySelector("#lostCmdp");
let link_login= document.querySelector("#logIn");
let div_signin= document.querySelector("#signin");
let div_login= document.querySelector("#login");

link_signin.addEventListener("click",function(){
    div_signin.style.display="block";
    div_login.style.display="none";
});

link_login.addEventListener("click",function(){
    div_signin.style.display="none";
    div_login.style.display="block";
});

