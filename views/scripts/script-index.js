var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombolCari");
var container = document.getElementById("container");

keyword.addEventListener("keyup", () => {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;

        }
    }
    xhr.open("GET", 'pokemon.php?keyword=' + keyword.value, true);
    xhr.send();
});