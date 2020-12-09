const apiKey= "a5d578c6ef367bc72006646c61eb55f2";
const poster = "http://image.tmdb.org/t/p/original";
const genre= [];
const film=[];


fetch(`https://api.themoviedb.org/3/genre/movie/list?api_key=${apiKey}&language=en-US`)
    .then(response => response.json())
    .then((data) => {
        
        // console.log('data:', data.genres[0].name)
        
        data.genres.forEach(element => {
            switch(element.name){

            
                case "Action":
                case "Horror":
                case "Adventure":
                case "Romance":
                case "Comedy":
                case "Music":
                case "Tv Movie":
                genre.push(element);
                console.log('element:', element)

                break;
            };
        })     
         
            
                           
    });



fetch(`https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=en-US&page=1`)
.then (response => response.json())
.then ((data)=>{
    console.log('data:', data)
    data.results.forEach(element => {
        
        document.querySelector("#api").insertAdjacentHTML("beforeend",`<img data-id=${element.id} data-genre=${element.genre_ids[0]} src="${poster}${element.poster_path}" width="150px" style="padding-right:5px">`)
        // element.genre_ids.forEach(element=>{
            
        

        // })
        
        
        
        
    })
    document.querySelectorAll("#api img").forEach(element =>{
        console.log('element:', element)
        if(element.dataset.genre==28){
            
            document.querySelector("#api2").insertAdjacentHTML("beforeend", `<img data-id=${element.id} data-genre=${element.dataset.genre} src="${element.src}" width="150px" style="padding-right:5px">`  ) 
            //  console.log('genre_ids:', element.genre_ids)
        }
        
    })
});

 
const btnpopUp= document.querySelector(".PopUp");
const popUp= document.querySelector(".Pop_Up")
const AfficherpopUp=()=>{
    console.log("hey")
    popUp.style.display="block";
}
btnpopUp.addEventListener("click",AfficherpopUp());

