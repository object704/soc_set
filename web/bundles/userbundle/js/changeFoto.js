/*$(document).ready(function(){alert(1);
    $("#changeFotoDialog").dialog({
        autoOpen:false,
        bgiframe:true,
        closeOnEscape:true,
        title:"������� ����",
        position:["center",50],
        width:500,
        height:auto,
        draggable:false,
        resizable:false,
        modal:false,
        show:null,
        hide:null,
        buttons:{
            "�������":function(){$(this).dialog("close");}
        }
    });
    $("#changeFotoBtn").click(function(){
        $("#changeFotoDialog").dialog("open");
    });
});
*/

$(document).ready(function(){
    $("#changeFotoDialog").dialog({
        autoOpen:false,
        closeOnEscape:true,
        position:["center",200],
        draggable:false,
        resizable:false,
        modal:false

    });
    $("#changeFotoBtn").click(function(){
        $("#changeFotoDialog").dialog("open");
    });
    
});