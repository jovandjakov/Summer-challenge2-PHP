/*-------SLAJDER----------------------------- */  

var slidePargraph = ["Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi totam at incidunt ",
    "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi totam at incidunt consequuntur vero numquam sint eum voluptas.",
    "Sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi to "];

var parag = document.getElementById("para");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");
var counter = 0;

parag.innerText = slidePargraph[counter];

setInterval(nextImage, 3000);
nextBtn.addEventListener("click", nextImage)
function nextImage() {
    counter++;
    if(counter > slidePargraph.length - 1) {
        counter = 0 ;
    }
    parag.innerText = slidePargraph[counter];
}

prevBtn.addEventListener("click", prevImage)
function prevImage() {
    counter--
    if(counter < 0) {
        counter = slidePargraph.length - 1;
    }
    parag.innerText = slidePargraph[counter]
}


/*-------SKROL PROVIDAN----------------------------- */   
var navBar = document.getElementById("navBar");

window.addEventListener("scroll", skroluj);

function skroluj() {
    if(window.pageYOffset > 200) {
        navBar.style.background = "rgba(46, 33, 146, 0.8)";
        }
        else {
            navBar.style.background = "#37287b";
        }
    }