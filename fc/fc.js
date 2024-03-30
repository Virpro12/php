let op = document.getElementById("op")
let cl = document.getElementById("cl")
let content = document.getElementsByClassName("s-nav-c")[0]

op.addEventListener("click",() => {
    content.classList.toggle("s-nav-o")
    document.body.classList.toggle("back")
})
cl.addEventListener("click",() => {
    content.classList.toggle("s-nav-o")
    document.body.classList.toggle("back")
})