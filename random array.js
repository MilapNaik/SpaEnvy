var rand = myArray[Math.floor(Math.random() * 100)];

function alertselected (){
    var x = document.getElementById ( "services" ).selectedIndex;
    var y = document.getElementById ( "services" ).options;
    var id = y [x].index;
    redirect(id);
}

function redirect(x){
    document.getElementById ( "param_ID" ).value = x;
    document.forms ["./ListAlgorithmAction"].submit ();
}
