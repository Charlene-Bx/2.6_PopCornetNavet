const link_film= document.querySelectorAll(".Drop_Menu");

const drop_content= document.querySelectorAll(".Drop_Content li");

// MUST TO DO:
// Afficher chaque <li> indépendament les uns des autres, à intervales reguliere pour donner l'impression d'un menu déroulant
// Mais comment?? Tentatives avec des setTimeout infructueuses.

link_film.forEach(element=>{

    element.addEventListener("mouseover", function(){
        const drop_content= element.querySelectorAll(".Drop_Content li");
        const icone= element.querySelector("i");

        drop_content.forEach(Element=>{
            Element.style.display="inherit";
            icone.style.color= "#CEF0BE";
            icone.style.textShadow= "2px 3px 5px #3B3A34";
        })
    });

    element.addEventListener("mouseout", function(){
        const drop_content= element.querySelectorAll(".Drop_Content li");
        const icone= element.querySelector("i");
        drop_content.forEach(Element=>{
            Element.style.display="none";
            icone.style.color= "#E3E1CC";
            icone.style.textShadow= "none";
        })
    });
})






