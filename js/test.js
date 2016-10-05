/**
 * Created by Rado on 4.10.2016 г..
 */
function initHere(){
    this.a = "asd";


}

i = new initHere();

counter=0;

$hereDiv = $("#here");

$("#addDiv").click(function (){
    counter+=1;
    $buttonRm = $("<button class='thisButtons' id='button_counter_"+counter+"'>rm</button>");
    //alert($buttonRm.prop('outerHTML'));

    $span =$("<div class ='thisDivs' id='counter_"+ counter +"'>test"+" asd "+"</div>");



    $buttonRm.on("click",function () {
        //$("#counter_"+counter).remove();
        //$("#button_counter_"+counter).remove();
       // $(this).prev().prev().remove();

        //$(this).prev().remove();
        $(this).parent().remove();
        $(this).remove();
        reorderDivs();
        reorderButtons();

    });

    $hereDiv.append($span);
    $span.text($span.text()).append($buttonRm);
   // $hereDiv.append($buttonRm);
   // alert("opala");111

})

function reorderDivs(){
    counter=0;
    $(".thisDivs").each(function (){
        counter+=1;
        $(this).attr("id",'counter_'+ counter );
    });
}

function reorderButtons(){
    counter=0;
    $(".thisButtons").each(function (){
        counter+=1;
        $(this).attr("id",'button_counter_'+ counter );
    });
}