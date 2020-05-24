         function getState(val){
        $.ajax({
            type:"POST",
            url:"getstate.php",
            data: "year="+val,
            success:function(data){
                $("#subnm").html(data);
            }
        });
    }
     function getStatetea(val){
        $.ajax({
            type:"POST",
            url:"getstatetea.php",
            data: "department="+val,
            success:function(data){
                $("#teanm").html(data);
            }
        });
    }
    function getStateth(val){
        $.ajax({
            type:"POST",
            url:"getstateth.php",
            data: "subject="+val,
            success:function(data){
                $("#thcls").html(data);
            }
        });
    }
     function thhcls(){ 
     var text = document.getElementById("thcls");
     var show = document.getElementById("thshow");  
      if (text.checked == true){

                    show.style.display = "block";
                    document.getElementById("thclsselect").required=true;
                
                    
            } 
            else {
                    show.style.display = "none";
                    document.getElementById("thclsselect").required=false;
         }
    }
    function tucls(){ 
     var texts = document.getElementById("tutcls");
     var show = document.getElementById("tushow");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("tutclsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("tutclsselect").required=false;
       }
    }
     function b1cl(){ 
     var texts = document.getElementById("b1cls");
     var show = document.getElementById("b1show");
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b1clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b1clsselect").required=false;
       }
    }
      function b2cl(){ 
     var texts = document.getElementById("b2cls");
     var show = document.getElementById("b2show");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b2clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b2clsselect").required=false;
       }
    }
         function b3cl(){ 
     var texts = document.getElementById("b3cls");
     var show = document.getElementById("b3show");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b3clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b3clsselect").required=false;
       }
    }
         function b4cl(){ 
     var texts = document.getElementById("b4cls");
     var show = document.getElementById("b4show");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b4clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b4clsselect").required=false;
       }
    }
         function b5cl(){ 
     var texts = document.getElementById("b5cls");
     var show = document.getElementById("b5show");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b5clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b5clsselect").required=false;
       }
    }
         function b6cl(){ 
     var texts = document.getElementById("b6cls");
     var show = document.getElementById("b6show");  
      if (texts.checked == true){
            show.style.display = "block";
            document.getElementById("b6clsselect").required=true;
        } 
        else {
            show.style.display = "none";
            document.getElementById("b6clsselect").required=false;
       }
    }