</div>

<script src="js.js">

/*-------SLAJDER----------------------------- */   
/*
var slidePargraph = ["Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi totam at incidunt consequuntur vero",
    "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi totam at incidunt consequuntur vero numquam sint eum voluptas.",
    "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos illo nisi sit iusto obcaecati, aliquid maiores modi, quibusdam rem quisquam animi totam "];
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
}*/


/*-------SKROL PROVIDAN----------------------------- */   
/*var navBar = document.getElementById("navBar");

window.addEventListener("scroll", skroluj);

function skroluj() {
    if(window.pageYOffset > 200) {
        navBar.style.background = "rgba(46, 33, 146, 0.8)";
        }
        else {
            navBar.style.background = "#37287b";
        }
    }*/
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->
</body>

</html>