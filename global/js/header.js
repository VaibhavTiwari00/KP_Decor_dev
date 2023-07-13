function myfun() {
    document.getElementById("hamburger-cross").style.display = "block";
    document.getElementById("hamburger").style.display = "none";
    document.getElementById("menu-navbar").style.right = "0%";
    document.getElementById("menu-navbar").style.transition = "all 0.8s";

}

function myfunn() {

    document.getElementById("menu-navbar").style.right = "-100%";
    document.getElementById("hamburger").style.display = "block";
    document.getElementById("hamburger-cross").style.display = "none";

}