 function addFields0(){
            // Number of inputs to create
            // Container <div> where dynamic content will be placed
           
                // Append a node with a random text
      
            var x=document.getElementById('subtable').insertRow(2);
			var y1 = x.insertCell(0);
			var y2 = x.insertCell(1);
			var y3 = x.insertCell(2);
			var y4 = x.insertCell(3);
			var y5 = x.insertCell(4);
			var y6 = x.insertCell(5);
			y1.innerHTML='<input type="text" id="subnm" name="subnm" value="">';
			y2.innerHTML='<input type="text" id="subsn" name="subsn" value="">';
			y3.innerHTML='<input type="number" id="subth" name="subth" value="0">';
			y4.innerHTML='<input type="number" id="subpr" name="subpr" value="0">';
            y5.innerHTML='<input type="number" id="subtu" name="subtu" value="0">';
            y6.innerHTML='<center><input type="checkbox" name="elective" id="elective" value="elecsub" unchecked></center>'; 
    		//x.appendChild(y1);
                // Create an <input> element, set its type and name attributes        
        }
function delFields0(){
 			var x=document.getElementById('subtable').deleteRow(1);
}
 
 function addFields1(){
            // Number of inputs to create
            var numberelec1 = document.getElementById("memelec1").value;
            var number1 = document.getElementById("member1").value;
            // Container <div> where dynamic content will be placed
            var container1 = document.getElementById("container1");
            // Clear previous contents of the container
            while (container1.hasChildNodes()) {
                container1.removeChild(container1.lastChild);
            }
            
             for (i=0;i<numberelec1;i++){
                // Append a node with a random text
                container1.appendChild(document.createTextNode("Elective Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject1" + i;
                container1.appendChild(input);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
                container1.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc1" + i;
                container1.appendChild(inputsc);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
                container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth1" + i;
                container1.appendChild(inputth);
 				// Append a line break
				container1.appendChild(document.createElement("br"));      
                
				container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr1" + i;
                container1.appendChild(inputpr);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
				container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu1" + i;
                container1.appendChild(inputtu);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
            }
            for (i=0;i<number1;i++){
                // Append a node with a random text
                container1.appendChild(document.createTextNode("Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject1" + i;
                container1.appendChild(input);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
                container1.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc1" + i;
                container1.appendChild(inputsc);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
				container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth1" + i;
                container1.appendChild(inputth);
 				// Append a line break
				container1.appendChild(document.createElement("br"));  
                
				container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr1" + i;
                container1.appendChild(inputpr);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
				container1.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu1" + i;
                container1.appendChild(inputtu);
                // Append a line break 
                container1.appendChild(document.createElement("br"));
            }
              var x1 = document.createElement("BUTTON");
  						var t1 = document.createTextNode("ADD");
  						x1.appendChild(t1);
  						container1.appendChild(x1);   
        }
        
        function addFields2(){
            // Number of inputs to create
            var numberelec2 = document.getElementById("memelec2").value;
            var number2 = document.getElementById("member2").value;
            // Container <div> where dynamic content will be placed
            var container2 = document.getElementById("container2");
            // Clear previous contents of the container
            while (container2.hasChildNodes()) {
                container2.removeChild(container2.lastChild);
            }
             for (i=0;i<numberelec2;i++){
                // Append a node with a random text
                container2.appendChild(document.createTextNode("Elective Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject2" + i;
                container2.appendChild(input);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
                container2.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc2" + i;
                container2.appendChild(inputsc);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
                container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth2" + i;
                container2.appendChild(inputth);
 				// Append a line break
				container2.appendChild(document.createElement("br"));      
                
				container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr2" + i;
                container2.appendChild(inputpr);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
				container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu2" + i;
                container2.appendChild(inputtu);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
            }
            
            for (i=0;i<number2;i++){
                // Append a node with a random text
                container2.appendChild(document.createTextNode("Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject2" + i;
                container2.appendChild(input);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
                container2.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc2" + i;
                container2.appendChild(inputsc);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
                container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth2" + i;
                container2.appendChild(inputth);
 				// Append a line break
				container2.appendChild(document.createElement("br"));      
                
				container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr2" + i;
                container2.appendChild(inputpr);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
				container2.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu2" + i;
                container2.appendChild(inputtu);
                // Append a line break 
                container2.appendChild(document.createElement("br"));
            }
              var x2 = document.createElement("BUTTON");
  						var t2 = document.createTextNode("ADD");
  						x2.appendChild(t2);
  						container2.appendChild(x2);   
        }
        
        function addFields3(){
            // Number of inputs to create
            var numberelec3 = document.getElementById("memelec3").value;
            var number3 = document.getElementById("member3").value;
            // Container <div> where dynamic content will be placed
            var container3 = document.getElementById("container3");
            // Clear previous contents of the container
            while (container3.hasChildNodes()) {
                container3.removeChild(container3.lastChild);
            }
             for (i=0;i<numberelec3;i++){
                // Append a node with a random text
                container3.appendChild(document.createTextNode("Elective Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject3" + i;
                container3.appendChild(input);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
                container3.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc3" + i;
                container3.appendChild(inputsc);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
                container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth3" + i;
                container3.appendChild(inputth);
 				// Append a line break
				container3.appendChild(document.createElement("br"));      
                
				container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr3" + i;
                container3.appendChild(inputpr);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
				container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu3" + i;
                container3.appendChild(inputtu);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
            }
            
            for (i=0;i<number3;i++){
                // Append a node with a random text
                container3.appendChild(document.createTextNode("Subject " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "subject3" + i;
                container3.appendChild(input);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
                container3.appendChild(document.createTextNode("\u00A0 \u00A0 Subject shortcode" + (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputsc = document.createElement("input");
                inputsc.type = "text";
                inputsc.name = "subsc3" + i;
                container3.appendChild(inputsc);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
                container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Theory) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputth = document.createElement("input");
                inputth.type = "text";
                inputth.name = "hrth3" + i;
                container3.appendChild(inputth);
 				// Append a line break
				container3.appendChild(document.createElement("br"));      
                
				container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Practical) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputpr = document.createElement("input");
                inputpr.type = "text";
                inputpr.name = "hrpr3" + i;
                container3.appendChild(inputpr);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
				container3.appendChild(document.createTextNode("\u00A0 \u00A0 Number of hours (Tutorial) "+ (i+1)));
                // Create an <input> element, set its type and name attributes
                var inputtu = document.createElement("input");
                inputtu.type = "text";
                inputtu.name = "hrtu3" + i;
                container3.appendChild(inputtu);
                // Append a line break 
                container3.appendChild(document.createElement("br"));
            }
              var x3 = document.createElement("BUTTON");
  						var t3 = document.createTextNode("ADD");
  						x3.appendChild(t3);
  						container3.appendChild(x3);   
        }
        
 		function myFunction0(){ 
      var checkBox0 = document.getElementById("fe");
      
  // Get the output text
  		var text0 = document.getElementById("mem0");  
         if (checkBox0.checked == true){
     				text0.style.display = "block";
  			} 
  			else {
    				text0.style.display = "none";
    	 }
    	 
    }
      function myFunction1(){ 
      var checkBox1 = document.getElementById("se");
      
  // Get the output text
  		var text1 = document.getElementById("mem1");  
         if (checkBox1.checked == true){
     				text1.style.display = "block";
  			} 
  			else {
    				text1.style.display = "none";
    	 }
    	 
    }
    
    
     function myFunction2(){ 
     var checkBox2 = document.getElementById("te");
     var text2 = document.getElementById("mem2");  
      if (checkBox2.checked == true){
     				text2.style.display = "block";
  			} 
  			else {
    				text2.style.display = "none";
    	 }
    }
    
    
     function myFunction3(){ 
     var checkBox3 = document.getElementById("be");
     var text3 = document.getElementById("mem3");  
      if (checkBox3.checked == true){
     				text3.style.display = "block";
  			} 
  			else {
    				text3.style.display = "none";
    	 }
    }
    function elective0(){
    	var checkBox4 = document.getElementById("beelec0");
     	var text4 = document.getElementById("elect0");  
      	if (checkBox4.checked == true){
     				text4.style.display = "block";
  			} 
  			else {
    				text4.style.display = "none";
    	 }
    }
    function elective1(){
    	var checkBox5 = document.getElementById("beelec1");
     	var text5 = document.getElementById("elect1");  
      	if (checkBox5.checked == true){
     				text5.style.display = "block";
  			} 
  			else {
    				text5.style.display = "none";
    	 }
    }function elective2(){
    	var checkBox6 = document.getElementById("beelec2");
     	var text6 = document.getElementById("elect2");  
      	if (checkBox6.checked == true){
     				text6.style.display = "block";
  			} 
  			else {
    				text6.style.display = "none";
    	 }
    }function elective3(){
    	var checkBox7 = document.getElementById("beelec3");
     	var text7 = document.getElementById("elect3");  
      	if (checkBox7.checked == true){
     				text7.style.display = "block";
  			} 
  			else {
    				text7.style.display = "none";
    	 }
    }
    
      function selmech(){ 
     var texts = document.getElementById("departmentmech");
     var show = document.getElementById("mechAB");  
      if (texts.checked == true){
     				show.style.display = "block";
     				texts.checked=false;
     				texts.disabled=true;
     				
  			} 
  			else {
    				show.style.display = "none";
    	 }
    }
