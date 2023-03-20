// $(document).ready(function(){
//     $("h1").css("background","coral");
//     $("#demo").css("color","Red");
// })

//*******First Example**********/
$(document).ready(function(){
    $("#button").click(function(){
        $("h1").css("background","coral");
        $("#demo").css("color","Red");
        $("h1").css("font-size","80px");
        $("h1").css("text-align","center");
    })
})

//********Second Example******** */
$(document).ready(function(){
    //Btn One
    $(".btn_one").click(function(){
        $("p").text("This is a demo text")
    })
    //Btn two
    $(".btn_two").click(function(){
        $("P:first").text("This is another demo text")
    })
    //Btn three
    $(".btn_three").click(function(){
        $(".empty").text("This is one more demo text")
    })
})