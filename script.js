

function changetable(x,y){
    document.getElementById('myTable').rows[x].cells[y].style.backgroundColor = "#003333";
}

function changetable1(x,y){
    document.getElementById('myTable').rows[x].cells[y].style.backgroundColor = "#884433";
}

function show() {
    //document.getElementById('img1').style.visibility = "hidden";
    var element = document.getElementById("img1"); 
    element.setAttribute("width", "64"); 
    element.setAttribute("height", "64");
}



function discount() {
    document.getElementById("hand").innerHTML = "$30";
    document.getElementById("foot").innerHTML = "$50";
    document.getElementById("waxing").innerHTML = "$60";
    document.getElementById("facial").innerHTML = "$80";
    document.getElementById("tanning").innerHTML = "$100";
    
    document.getElementById("hand").style.color = "#FFFFFF";
    document.getElementById("foot").style.color = "#FFFFFF";
    document.getElementById("waxing").style.color = "#FFFFFF";
    document.getElementById("facial").style.color = "#FFFFFF";
    document.getElementById("tanning").style.color = "#FFFFFF";
         
    var x = document.getElementById("s01").value; //Get value from drop down(i.e. hand)
    var y = document.getElementById(x).textContent; //Get text content from table
    var z = y.substring(1,y.length);
    var number = parseInt(z,10);//number = dollar price
    var selected = document.getElementById("s01");
    var disc = selected.options[selected.selectedIndex].text;
    var disc0 = disc.length-12;
    var disc1 = disc.substring(disc0,disc0+2);//Get discount amount from drop down
    document.getElementById(x).style.color = "#00FF00";
    var disc2 = parseInt(disc1,10);
    var disc3 = disc2/100;//Turn discount into int, then decimal
    var disc32 = number * disc3;
    var finaldiscount = number - disc32;//disc4 = final discounted price
    
    //To change amount appeared, must change it's innerhtml,
    //it's table value, AND percentage value in drop down
    document.getElementById(x).innerHTML = "$" + finaldiscount;
}

var index = 1;
function addRow(){
            var table=document.getElementById("myTable");
            var row=table.insertRow(table.rows.length);
            var cell1=row.insertCell(0);
            var t1=document.createElement("input");
                t1.id = "txtName"+index;
                cell1.appendChild(t1);
            var cell2=row.insertCell(1);
            var t2=document.createElement("input");
                t2.id = "txtReview"+index;
                cell2.appendChild(t2);
      index++;

}

function deleteRow(event) {
    event.preventDefault();
    var input = document.getElementById('id').value;
    var field = document.getElementById(input);
    if(field != null) {
        var real = field.getAttribute('data-dbid');
        document.location.href = 'delete.php?id=' + real;
    }
    else {
        alert("You must enter in an ID from the table");
    }
}

