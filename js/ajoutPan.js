
$(document).ready(function(){
    $("button").click(function(e){
        e.preventDefault();
        
        var classSelect=$(this).parent();
        var idInput=classSelect.children();
        var quant=idInput[2].innerHTML;
        var ref=idInput[2].className;
        this.parentNode.children[2].innerHTML=0;
        console.log(quant,ref);
        $.ajax({
            type: "get",
            url: "../php/verifAjout.php",
            data: {
                "ref":ref,
                "quant":quant
            },
            dataType: "json",
            success: function (response) {
                if(response.stat == 'ok'){
                    console.log(response.stat);
                }else{
                    console.log(response.stat);
                }
            }
        });
    })
})

        
$(document).ready(function(){
    $(".affStock").click(function(e){
        e.preventDefault();
        var ref = this.parentNode.children[2].className;
        var stock = this.id;
        console.log(ref);
        if(this.innerHTML=="Stock"){
            this.innerHTML=stock;
        }
        else {
            this.innerHTML="Stock";
        }
    })
})


$(document).ready(function(){
    // Lorsque vous cliquez sur une image
    $('.Zimg').click(function(){
        $('#img01').attr('src', $(this).attr('src')); // Change la source de l'image dans la modal
        $('#myModal').css('display', 'block'); // Affiche la modal
    });

    // Lorsque vous cliquez sur <span> (x), fermez la modal
    $('.close').click(function(){
        $('#myModal').css('display', 'none');
    });
});
