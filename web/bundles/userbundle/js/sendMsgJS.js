$(document).ready(function() {

    $("#temaInput").css("width","270px");
    $("#letterInput").css("width","270px");
    $("#letterInput").css("height","170px");

    $("#sendMsgDialog").dialog({
        autoOpen:false,
        closeOnEscape:true,
        position:["center",200],
        draggable:true,
        resizable:false,
        modal:false,
        buttons:{
            "Отправить":function(){
                //document.forms.changeFotoForm.submit();
                //alert(1);
                var tema1 = document.getElementById("temaInput").value;
                //alert(tema)
                var letter1 = document.getElementById("letterInput").value;
                var id_to1 = document.getElementById("id_toInput").value;
                //alert(id_to1);
                $.get("sendMsg.php",
                    { id_from:getcookie("id_user"), id_to:id_to1, tema:tema1, letter:letter1},
                    function(data){
                        //alert(data);
                        $("#sendMsgDialog").dialog("close");
                    }
                );

            },
            "Закрыть":function(){
                $(this).dialog("close");
            }
        }
    });
    
    $("#sendMsgBtn").click(function(){
       $("#sendMsgDialog").dialog("open");
    });
});