
window.onscroll = function () {
    if (document.documentElement.scrollTop > 100) {
        document.getElementById("navbar").style.background = "black";
        document.getElementById("navbar").style.padding = "150px 75px";
        document.getElementById("logo").style.color = "white";
        document.getElementById("navbar-flex").style.color = "white";
    }
    else {
        document.getElementById("navbar").style.background = "white";
        document.getElementById("navbar").style.padding = "150px 75px";
        document.getElementById("logo").style.color = "black";
        document.getElementById("navbar-flex").style.color = "black";
    }
}