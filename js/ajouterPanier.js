function reduire(e){
    if (parseInt(e.parentNode.children[2].innerHTML) > 0) {
        e.parentNode.children[2].innerHTML=parseInt(e.parentNode.children[2].innerHTML)-1;
    }
}

function augmenter(e,stock){
    if (parseInt(e.parentNode.children[2].innerHTML) < parseInt(stock)) {
        e.parentNode.children[2].innerHTML=parseInt(e.parentNode.children[2].innerHTML)+1;
    }
}
