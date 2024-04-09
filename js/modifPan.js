$(document).ready(function(){
    $("#supp").click(function(e){
        e.preventDefault();
        console.log('supp');
        $.ajax({
            type: "get",
            url: "../php/suppPan.php",
            dataType: "json",
            success: function (response) {
                if(response.stat == 'ok'){
                    console.log(response.stat);
                    window.location = '../php/panier.php';
                }else{
                    console.log(response.stat);
                }
            }
        });
    })
})

$(document).ready(function(){
    $(".plus").click(function(e){
        e.preventDefault();
        var nom = this.parentNode.parentNode.children[1].children[0].innerHTML;
        console.log(nom);
        $.ajax({
            type: "get",
            url: "../php/plus.php",
            data:{"nom":nom},
            dataType: "json",
            success: function (response) {
                if(response.stat == 'ok'){
                    console.log(response.stat);
                    window.location = '../php/panier.php';
                }else{
                    console.log(response.stat);
                }
            }
        });
    })
})

$(document).ready(function(){
    $(".moins").click(function(e){
        e.preventDefault();
        var nom = this.parentNode.parentNode.children[1].children[0].innerHTML;
        console.log('moins');
        $.ajax({
            type: "get",
            url: "moins.php",
            data:{"nom":nom},
            dataType: "json",
            success: function (response) {
                if(response.stat == 'ok'){
                    console.log(response.stat);
                    window.location = '../php/panier.php';
                }else{
                    console.log(response.stat,response.info);
                }
            }
        });
    })
})

$(document).ready(function(){
    $("#confAchat").click(function(e){
        console.log('test');
        $.ajax({
            type: "get",
            url: "../php/verifConnexion.php",
            dataType: "json",
            success: function (response) {
                if(response.stat == 'ok'){
                    console.log(response.stat);
                    window.location = '../php/confirmer.php';
                }
                else{
                    console.log(response.stat);
                    window.location = '../php/id.php';
                }
            }
        });
    })
})
