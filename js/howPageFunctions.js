// setupScrollBlur();
// function setupScrollBlur() {
//     var elems = document.getElementsByClassName("instructionList");
//
//     $('.instructionList').scroll(function() {
//         if($(this).scrollTop() + $(this).innerHeight() >= ($(this)[0].scrollHeight - 100)) {
//             // This clears the bottom from blur
//             $(this).parent().css("-webkit-mask-image", "linear-gradient(to bottom, black 100%, transparent 100%)");
//             $(this).parent().css("mask-image", "linear-gradient(to bottom, black 100%, transparent 100%)");
//         } else {
//             // This blurs the bottom so people know to keep scrolling
//             // $(this).parent().css("-webkit-mask-image", "linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0))");
//             // $(this).parent().css("mask-image", "linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0))");
//             $(this).parent().css("-webkit-mask-image", "linear-gradient(to bottom, black 80%, transparent 100%)");
//             $(this).parent().css("mask-image", "linear-gradient(to bottom, black 80%, transparent 100%)");
//         }
//     });
// }


function changeTutorialImage(img) {
    //remove active class of parent descendant
    //var imgs = document.getElementsByClassName("howImage active");
    var imgs = img.parentNode.getElementsByClassName("howImage active");
    for(var i = 0; i < imgs.length; i++) {
        imgs[i].className = "howImage";
    }

    //set clicked img to active
    img.className = "howImage active";

    //replace the large image row innerHTML w/ clicked img HTML
    img.parentNode.parentNode.children[0].children[0].src = img.src;

}

function zoomTutorialImage(imgContainer) {
    var zoomedTutorialContainer = document.createElement("div");
    zoomedTutorialContainer.className = "zoomedTutorialContainer";
    zoomedTutorialContainer.setAttribute("onclick", "closeTutorialImage(this);");

    var title = document.createElement("div");
    title.className = "zoomedTutorialMessage";
    title.innerText = imgContainer.parentNode.parentNode.children[2].children[0].innerHTML.trim();

    var image = document.createElement("img");
    image.className = "zoomedTutorialImage";
    image.src = imgContainer.children[0].src;

    var footer = document.createElement("div");
    footer.className = "zoomedTutorialMessage";
    footer.innerText = "Click Anywhere to Close!"

    zoomedTutorialContainer.appendChild(title);
    zoomedTutorialContainer.appendChild(image);
    zoomedTutorialContainer.appendChild(footer);

    document.getElementById("instructionWidget").appendChild(zoomedTutorialContainer);
}

function closeTutorialImage(zoomContainer) {
    zoomContainer.remove();
}
