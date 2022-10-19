var click = 1;

document.getElementById("menu-image-icon").onclick = function() {
    if (click == 1) {
        document.getElementById("nav-menu-icon").style.display = "block";
        click = 0;
    } else {
        document.getElementById("nav-menu-icon").style.display = "none";
        click = 1;
    }

}

var endereco_url = document.URL;
if (endereco_url == 'https://ecolifeimper.com.br/index.php?error-name') {
    var final_page = document.body.scrollHeight;
    window.scrollTo(0, final_page);
} else if (endereco_url == 'https://ecolifeimper.com.br/index.php?error-email') {
    var final_page = document.body.scrollHeight;
    window.scrollTo(0, final_page);
} else if (endereco_url == 'https://ecolifeimper.com.br/index.php?error-message') {
    var final_page = document.body.scrollHeight;
    window.scrollTo(0, final_page);
} else if (endereco_url == 'https://ecolifeimper.com.br/index.php?success') {
    var final_page = document.body.scrollHeight;
    window.scrollTo(0, final_page);
}