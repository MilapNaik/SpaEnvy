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

function deleteRow() {
    document.getElementById("myTable").deleteRow(-1);
}