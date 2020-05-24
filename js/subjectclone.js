 function addFields0(){
            // Number of inputs to create
            // Container <div> where dynamic content will be placed
           
                // Append a node with a random text
      
            var x=document.getElementById('subtable').insertRow();
			var y1 = x.insertCell(0);
			var y2 = x.insertCell(1);
			var y3 = x.insertCell(2);
			var y4 = x.insertCell(3);
			var y5 = x.insertCell(4);
			var y6 = x.insertCell(5);
			y1.innerHTML='<input type="text" id="subnm" name="subnm[]" value="">';
			y2.innerHTML='<input type="text" id="subsn" name="subsn[]" value="">';
			y3.innerHTML='<input type="number" id="subth" name="subth[]" value="0">';
			y4.innerHTML='<input type="number" id="subpr" name="subpr[]" value="0">';
            y5.innerHTML='<input type="number" id="subtu" name="subtu[]" value="0">';
            y6.innerHTML='<center><input type="checkbox" name="subelec[]" id="elective" value="0" onclick="if(this.checked){document.getElementById("elective2").checked=false;}" checked> &nbsp;No<br><input type="checkbox" name="subelec[]" id="elective2" onclick="if(this.checked){document.getElementById("elective").checked=false;}" value="1"> Yes</center>'; 
    		//x.appendChild(y1);
                // Create an <input> element, set its type and name attributes        
        }
function delFields0(){
		var x = document.getElementById("subtable").rows.length;
		if(x>2){
 				document.getElementById('subtable').deleteRow(-1);}
 		
}
 function elecval(){
 	if(document.getElementById('elective').checked==true)
 	{
 		document.getElementById('elective').value='1';
 	}
 	//if(document.getElementById('elective').checked==false)
 	else	{
	document.getElementById('elective').value='0';
 }}

