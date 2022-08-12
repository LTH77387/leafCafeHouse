document.getElementById("p1").style.display = "none";
document.getElementById("readLess").style.display = "none";

function readMore() {
    document.getElementById("p1").style.display = "block";
    document.getElementById("readMore").style.display = "none";
    document.getElementById("readLess").style.display = "block";
}

function readLess() {
    document.getElementById("p1").style.display = "none";
    document.getElementById("readLess").style.display = "none";
    document.getElementById("readMore").style.display = "block";

}