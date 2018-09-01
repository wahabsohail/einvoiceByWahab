// Tectarea 
  



function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(2);
    
	 var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
	var cell3 = row.insertCell(3);
	var cell4 = row.insertCell(4);
	var cell5 = row.insertCell(5);
	
	
	cell0.innerHTML = "<input id='sr' type='text' name='sr' size='1' class='form-control'>";
    cell1.innerHTML = "<input  id='item' type='text' name='Item'  class='form-control'>";
    cell2.innerHTML = "<input id='qty' type='text' name='Qty'  size='1' class='form-control' onchange='calculation()'>";
    cell3.innerHTML = "<input id='unitPrice' type='text' name='UnitPrice'  class='form-control' onchange='calculation()'>";
	cell4.innerHTML = "<input id='total1' type='text' name='Total' size='10' class='form-control'>";
	cell5.innerHTML = "<button type='button' class='btn btn-danger' value='Delete' onclick='deleteRow(this.parentNode.parentNode.rowIndex)'>Delete</button>";
	
	
}

function deleteRow(i){
    document.getElementById('myTable').deleteRow(i);
}
 function calculation(){
	 
    var a = parseInt(document.getElementById('qty').value);
    var b= parseInt(document.getElementById('unitPrice').value);
    var discount = parseInt(document.getElementById('discount').value);
	var total1=a*b;
	document.getElementById('total1').value=total1;
	document.getElementById('totalPrice').value=total1;

	var netTotal=total1-total1*discount/100;

	document.getElementById('netTotal').value=netTotal;
 }