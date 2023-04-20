
const titreH1 = document.querySelector(".animTitres h1")
const titreH2 = document.querySelector(".animTitres h2")

titreH1.addEventListener("click", ()=>
    gsap.from(titreH1, {rotate:360, duration : 0.5})
)

const alerte = document.querySelector(".alert")

gsap.from(titreH1, {x:-80, duration :1.25, opacity:0})
gsap.from(titreH2, {y:10,duration :0.75, opacity:0, delay:0.5})
gsap.to(alerte, {y:10,duration :0.5, opacity:0, delay:3.25, height:0})