var flag_st=1;

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
    url1="scripts/regGetGrp.php?id="+encodeURIComponent(id_spec);
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

function disableSpecGrp(){
//  document.reg.spec.style.display="none";
//  document.reg.grp.style.display="none";
    document.reg.spec.disabled=true;
    document.reg.grp.disabled=true;
    flag_st=0;
}
 function enableSpecGrp(){
//  document.reg.spec.style.display="block";
//  document.reg.grp.style.display="block";
    document.reg.spec.disabled=false;
    document.reg.grp.disabled=false;
    flag_st=1;
 }
 
 function validation(fn,sn,lg,pw,fl,sp,gr){
     return true;
 }
 
 function registerBtn(){

     var fisName;
     var secName;
     var login;
     var pw;
     var flag;
     var spec1=0;
     var grp1=0;
     var uri="scripts/regUser.php";
     
     fisName = trim(document.getElementById("fisName").value);
     secName = trim(document.getElementById("secName").value);
     login = trim(document.getElementById("lg").value);
     pw = trim(document.getElementById("pw").value);
     flag = flag_st;
     if(flag){
         spec1 = document.reg.spec.options[document.reg.spec.selectedIndex].value;
         grp1 = document.reg.grp.options[document.reg.grp.selectedIndex].value;
         //alert(spec1);
     }
     
     if(validation(fisName,secName,login,pw,flag,spec1,grp1)){
         uri += "?fn="+fisName.toString();
         uri += "&sn="+secName.toString()
         uri += "&lg="+login.toString();
         uri += "&pw="+pw.toString();
         uri += "&fl="+flag.toString();
         uri += "&id_sp="+spec1.toString();
         uri += "&id_gr="+grp1.toString();
         window.location.replace(uri);
     }
 }



function decode_utf8( s )
{
  return decodeURIComponent( escape( s ) );
}

function decode_utf8_to_cp1251(utftext) {
    var string = "";
    var i = 0;
    var c = c1 = c2 = 0;

    while ( i < utftext.length ) {

        c = utftext.charCodeAt(i);

        if (c < 128) {
            string += String.fromCharCode(c);
            i++;
        }
        else if((c > 191) && (c < 224)) {
            c2 = utftext.charCodeAt(i+1);
            string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
            i += 2;
        }
        else {
            c2 = utftext.charCodeAt(i+1);
            c3 = utftext.charCodeAt(i+2);
            string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
            i += 3;
        }

    }

    return string;
}
