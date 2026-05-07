// suit progression navbar
const cards = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav ul li a");

window.addEventListener("scroll", () => {
    let current = "";

    cards.forEach(card => {
        const cardTop = card.offsetTop;
        const cardHeight = card.clientHeight;
        if (scrollY >= cardTop - cardHeight / 3) {
            current = card.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });
});


// zoom sur image on click
const modal = document.getElementById('myModal');
const modalImg = document.getElementById("bigimg");
var img = document.querySelectorAll('.thumbnail');
    
for (var i=0; i<img.length; i++){
    img[i].onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    }    
}

modal.onclick = function() {
    bigimg.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       bigimg.className = "modal-content";
     }, 400);
    
}
