const showCopiedMessage = () => {
    let modalBtn = document.getElementById("url");
    let modal = document.querySelector(".modal-copied");
    var urlContainer = document.querySelector('.modal-content__linksection__link');

    //When button copy link is clicked, show "link copied" for 1,25s
    modalBtn.onclick = function () {
        modal.style.display = "block";
        setTimeout(function(){ modal.style.display = "none"; } , 1250);

        urlContainer.select();
        urlContainer.setSelectionRange(0, 99999);

        var url = urlContainer.value;

        navigator.clipboard.writeText(url);
    }
}

showCopiedMessage();