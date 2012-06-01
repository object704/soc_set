function chSpec(sel){ //alert(1);
    var id_spec = sel.options[sel.selectedIndex].value;
    if(id_spec!=0)
        getGroups(id_spec);
    else{
        var sel;
        sel = document.getElementById("select2");
        while (sel.childNodes.length) {
            sel.removeChild(sel.firstChild);
        }
        var option = document.createElement("option");
        option.text = 'Группа';
        option.value = 0;
        document.getElementById("select2").appendChild(option);
    }
}

function getGroups(id_spec){
    var link1;
    var url1;
    
    if (window.XMLHttpRequest){
        link1 = new XMLHttpRequest();
    }else {
        if(window.ActiveXObject){
            var XMLHTTP = ["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"];
            for(var i=0;i<4;i++){
                try{
                    link1=new ActiveXObject(XMLHTTP[i]);
                    break;
                }catch(e){};
            }
        }
    }
    if(!link1){
        window.alert("Ваш браузер не поддерживает AJAX!");
        return false;
    }
    url1="regGetGrp.php?id="+encodeURIComponent(id_spec);
    link1.open('GET',url1,false);
    link1.onreadystatechange = function(){analysisRequestGrp(link1);};
    link1.send(null);
    
}
function analysisRequestGrp(link){
    
    if(link.readyState == 4){
        if(link.status == 200){
            var json = link.responseText;
            var mass = eval('('+ json +')');
            var k = mass[0];
            var option;
            var i;
            var j;
            var t;
            var sel;
            
            sel = document.getElementById("select2");

            while (sel.childNodes.length) {
                sel.removeChild(sel.firstChild);
            }
            
            option = document.createElement("option");
            option.text = 'Группа';
            option.value = 0;
            document.getElementById("select2").appendChild(option);
            
            for(i=1;i<=k;i++){
                option = document.createElement("option");
                option.text = mass[i]['name'];
                option.value = mass[i]['id'];
                document.getElementById("select2").appendChild(option);
            }
            document.getElementById("select2").style.display="block";
            
        }else{
            alert("Error!");
        }
    }
}