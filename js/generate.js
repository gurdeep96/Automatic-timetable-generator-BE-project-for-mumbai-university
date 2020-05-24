/*$(document).ready(function(){
//console.log("sahi hai");
  $(".card").draggable({
    cursor: "move",
    start: log
  });


  $("#mytable").on("dblclick", ".dropped", function() {
    console.log("Origin found: ", $(this).data("origin"), $(this).data("top"));
    rev($(this));
  });
  $("#tray").droppable({
    accept: "#tray div",
    drop: function(e, ui) {
      var $drop = ui.draggable.clone();
      console.log("Dropped. Origin: ", $drop.data("origin"));
      $drop.removeAttr("style");
      $drop.addClass("dropped");
      $(this).append($drop);
      ui.draggable.remove();
      //var c = $("#cardDrop div").length;
    }
  }).sortable({
    revert: true
  });
});

function rev(me) {
  console.log("DoubleClick Detected.");
  var pos = me.data("origin");
  console.log("Returning to: ", pos);
  var $o = me.clone();
  $o.draggable({
    cursor: "move",
    start: log
  });
  $(this).data(".card").originalPosition = {
                top : pos.top,
                left : pos.left
            };
            // return boolean

}

function log(e, ui) {
  var pos = ui.offset;
  var $ob = $("#" + ui.helper.attr("id"));
console.log("sahi hai");
  $ob.attr("data-top", pos.top);
  $ob.attr("data-left", pos.left);
  $ob.attr("data-origin", [pos.top, pos.left].join(","));
  console.log("DragStart Position: ", pos);
  console.log("Logged: " + [$ob.data("top"), $ob.data("left")].join(","));
}
*/
/*
function show(){
  var a = document.getElementById("te").children[15];
  var b = document.getElementById("te").children[16];
  //console.log(a);
  a.appendChild(document.getElementById("tedrag13"));
  b.appendChild(document.getElementById("tedrag12"));
  //a.innerHTML= document.getElementById("tedrag13");
}
*/
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);

}

/*
function drag2(ev,drids) {
   //var data2 = ev.dataTransfer.getData("text");

    ev.dataTransfer.setData("text", ev.target.id);
  var variableToSend = ev.target.innerHTML;
  var del = ev.target.parentNode.parentNode.id;
  var drid = drids.substr(drids.length -2);
  //console.log(del);
  //console.log(variableToSend);
  if(variableToSend.indexOf("_Lab") !== -1){
  var val2 = parseInt(drid);
  var dayindex;
  val3 = val2+1;
  var values = val3.toString();
  var value2 = drids.slice(0, -2).concat(values);  
  var dayno = drid[drid.length -2];
        var temps = val3 % 10;
        if(dayno=="1"){
          dayindex=1;
        }
        if(dayno=="2"){
          dayindex=8;
        
        }
        if(dayno=="3"){
          dayindex=15;
        
        }
        if(dayno=="4"){
          dayindex=22;
        
        }
        if(dayno=="5"){
          dayindex=29;
        
        }
        var temp = dayindex+temps;
        //console.log(temp);
          var childnode = document.getElementById(drids).hasChildNodes();
           var c = document.getElementById(drids).childElementCount;
           
                   //console.log(del);
                  if(c==1){

			
                        document.getElementById(drids).colSpan="1";
                        var x = document.getElementById(del).insertCell(temp);
 
                        x.id=value2;
                        //x.setAttribute('ondrop',drop(event,this.id));
                        x.setAttribute("style", "background-color: red;");
                        x.setAttribute('ondrop','drop(event,this.id)');
                        x.setAttribute('ondragstart','drag2(event,this.id)');
                        x.setAttribute('ondragover','allowDrop(event)');
                  }

           

      }
 
}
*/

function automatic(){
      var className = document.getElementsByClassName('card');
      var classnameCount = className.length;
      var IdStore = new Array();
    for(var j = 0; j < classnameCount; j++){
        
        IdStore.push(className[j].id);
    }
    //console.log(IdStore);

    var tables =  document.getElementsByTagName("table");
    var tableStore = new Array();
    for(var i = 0; i < tables.length; i++){
        
        tableStore.push(tables[i].id);
    }
    //console.log(tableStore);
    var cellStore = new Array();
    var arr = new Array();
    var arr2 = new Array();
    for(var i = 0; i < tableStore.length; i++){

          if (document.getElementById(tableStore[i]).style.display === 'table') {
            
              var v = document.getElementById(tableStore[i]).getElementsByTagName("td");
              //v.splice(0,43);
              
            
            if(i==2){
              for(var j = 0; j < v.length; j++){
        
                  arr2.push(v[j]);
              }
              arr2.splice(0,43);
            arr2.splice(35,1);
            arr2.splice(70,1);
            //console.log(arr2);
            }
            else{
              for(var j = 0; j < v.length; j++){
        
                  arr.push(v[j]);
              }
            arr.splice(0,43);
            arr.splice(35,1);
            arr.splice(70,1);
            }
            if(i==3){
              arr.splice(105,1);
              arr.splice(140,1);
            }
            if(i==2){
                  for(var j = 0; j < arr2.length; j++){        
                  cellStore.push(arr2[j]);}
            }
            else{
            for(var j = 0; j < arr.length; j++){        
                  cellStore.push(arr[j]);}
            }
          
    }
  }
   // console.log(cellStore);
    for(var j = 0; j < IdStore.length; j++){
     
    var rand = cellStore[Math.floor(Math.random() * cellStore.length)];
    var qw = drop3(IdStore[j],rand.id);
    if(qw==1){
      var rand2 = cellStore[Math.floor(Math.random() * cellStore.length)];
      drop3(IdStore[j],rand2.id);
    }
   /* beginning: while(true){
        var rand = cellStore[Math.floor(Math.random() * cellStore.length)];
        var qw = drop3(IdStore[j],rand.id);
        if(qw==1){
            continue beginning;
        }
        break beginning;
    }*/
 
  }
  //window.alert("Generated!");
}
function drop2(ev) {
  ev.preventDefault();
  var data2 = ev.dataTransfer.getData("text");
 var del = ev.target.id;
 var variableToSend = document.getElementById(data2).innerHTML;
 
if(data2.indexOf(del) !== -1){ 
 
  document.getElementById(data2).style.height="60px";
  document.getElementById(data2).style.border="none";
  document.getElementById(data2).style.fontSize="10px";

  if(variableToSend.indexOf("_Lab") !== -1){
    var res = variableToSend.replace(" ", "<br>");
  var res2 = res.replace(" ", "<br>");
  var res3 = res2.replace(" ", "<br>");
  document.getElementById(data2).innerHTML= res3;
   var par = document.getElementById(data2).parentElement.id;
   var del = document.getElementById(par).parentElement.id;
  // console.log(par,del);
  var prid = par.substr(par.length -2);
  var pal2 = parseInt(prid);
  var pal3 = pal2+1;
  var palues = pal3.toString();
  var palue2 = par.slice(0,-2).concat(palues);
  var payindex;
 
  var payno = prid[prid.length -2];
  var pemps = pal3 % 10;
   if(payno=="1"){
          payindex=1;
        }
        else if(payno=="2"){
          payindex=8;
        
        }
        else if(payno=="3"){
          payindex=15;
        
        }
        else if(payno=="4"){
          payindex=22;
        
        }
        else if(payno=="5"){
          payindex=29;
        
        }
        var pemp = payindex+pemps;
               if(document.getElementById(par).colSpan=="2"){
                          var y = document.getElementById(par).childElementCount;
                          //var c1 = document.getElementById(par).hasChildNodes();
                               if(y==1){
                                for(j=0;j<pemp-1;j++){
                                    if(document.getElementById(del).children[j].colSpan=="2"){
                                            pemp=pemp-1;
                                      }
                                   }
                                document.getElementById(par).colSpan="1";
                                var xz = document.getElementById(del).insertCell(pemp);
                                
                                 //console.log(par,pemp,palue2);
                               
                                xz.id=palue2;

                                xz.setAttribute('ondrop','drop(event,this.id)');
                                //xz.setAttribute('ondragstart','drag2(event,this.id)');
                                xz.setAttribute('ondragover','allowDrop(event)');
                                }
                      }
  }
  ev.target.appendChild(document.getElementById(data2));
  $.post('deletecarddetails.php', {data2: data2});
}
else{window.alert("Put the cards at respective years");}
   
}
function drop(ev,drids) {

  ev.preventDefault();
  var data2 = ev.dataTransfer.getData("text");
  var drid = drids.substr(drids.length -2);
  var par = document.getElementById(data2).parentElement.id;
  var prid = par.substr(par.length -2);
  var variableToSend = document.getElementById(data2).innerHTML;
 // var childnode = document.getElementById(drid).hasChildNodes();
  var c = document.getElementById(drids).childElementCount;
  var del = ev.target.parentNode.id;
  var del2 = del.slice(0, 2);
  //console.log(del2);
  //console.log(del);
  var lab = "_Lab";
  var val2 = parseInt(drid);
  var pal2 = parseInt(prid);
  var val3 = val2+1;
  var pal3 = pal2+1;
  var val4 = val2-1;
  var prev = val4.toString();
  var values = val3.toString();
  var palues = pal3.toString();
  var value2 = drids.slice(0, -2).concat(values);
  var palue2 = par.slice(0,-2).concat(palues);
  var value3 = drids.slice(0,-2);
  var value4,value5,value6,value7,value8,value9,value10,value11,value12,value13;
  //for clash logic
  if(value3=="se"){
      if(drid[drid.length -1] !="0"){
      value4 = "te".concat(prev); value5 = "be".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
          value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "te".concat(drid);
            value4 = document.getElementById(value4).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "te".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
            
          }
          else
          {
            value5 = "be".concat(drid);
            value4 += document.getElementById(value5).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "be".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
          //console.log(value4);
      
    }
    else
     {
      value4 = "te".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "be".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "te".concat(values);
              value7 = "be".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }

     }
    
  }
   else if(value3=="te"){
      if(drid[drid.length -1] !="0"){
      value4 = "se".concat(prev); value5 = "be".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
            value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "se".concat(drid);
            value4 = document.getElementById(value4).innerText;
             if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
            
          }
          else
          {
            value5 = "be".concat(drid);
            value4 += document.getElementById(value5).innerText;
             if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "be".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
        //console.log(value4);
    }
    else
     {
      value4 = "se".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "be".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              value7 = "be".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }

     }
    
  }
   else if(value3=="be"){
      if(drid[drid.length -1] !="0"){
      value4 = "se".concat(prev); value5 = "te".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
              value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "se".concat(drid);
            value4 = document.getElementById(value4).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
          
          }
          else
          {
            value5 = "te".concat(drid);
            value4 += document.getElementById(value5).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "te".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
        //console.log(value4);
    }
    else
     {
      value4 = "se".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "te".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              value7 = "te".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
     }
    
  }
  else if(value3=="sema"){
      if(drid[drid.length -1] !="0"){
      value4 = "tema".concat(prev); value5 = "bema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "tema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "tema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "tema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "tema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
           
}
else if(value3=="tema"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "bema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
}
else if(value3=="bema"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    
}
else if(value3=="semb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    
}
else if(value3=="temb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "semb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
   
}
else if(value3=="bemb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "semb".concat(prev); value8 = "temb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "temb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "temb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "temb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "temb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
  
}
else if(value3=="fea"){
    if(drid[drid.length -1] !="0"){
      value4 = "feb".concat(prev); value5 = "fec".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "feb".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "feb".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "feb".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "feb".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}  
}
else if(value3=="feb"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "fec".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12= "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}   
}
else if(value3=="fec"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}   
}
else if(value3=="fed"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fec".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}    
}
else if(value3=="fee"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fec".concat(prev); value7 = "fed".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fed".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fed".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fed".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fed".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}    
}
//clash logic ends here

  var flag = 0;
  var plag = 0;
  var dayindex;
   var dayno = drid[drid.length -2];
   
        var temps = val3 % 10;
        
  if(dayno=="1"){
          dayindex=1;
        }
        else if(dayno=="2"){
          dayindex=8;
        
        }
        else if(dayno=="3"){
          dayindex=15;
        
        }
        else if(dayno=="4"){
          dayindex=22;
        
        }
        else if(dayno=="5"){
          dayindex=29;
        
        }
        var temp = dayindex+temps;
        var childnode = document.getElementById(drids).hasChildNodes();
        
         var res = variableToSend.replace("<br>", " ");
         var res2 = res.replace("<br>", " ");
         var res3 = res2.replace("<br>", " ");

var payindex;
 
var payno = prid[prid.length -2];
var pemps = pal3 % 10;
   if(payno=="1"){
          payindex=1;
        }
        else if(payno=="2"){
          payindex=8;
        
        }
        else if(payno=="3"){
          payindex=15;
        
        }
        else if(payno=="4"){
          payindex=22;
        
        }
        else if(payno=="5"){
          payindex=29;
        
        }
        var pemp = payindex+pemps;

        
   function plagvalue(ab){
   plag = ab;
    var j;
      //console.log(ab);
        
            if(plag==0){
               
                if(document.getElementById(data2).innerHTML.indexOf("_Lab") !== -1){
                      if(document.getElementById(par).colSpan=="2"){
                          var y = document.getElementById(par).childElementCount;
                          //var c1 = document.getElementById(par).hasChildNodes();
                               if(y==0){
                                for(j=0;j<pemp-1;j++){
                                    if(document.getElementById(del).children[j].colSpan=="2"){
                                            pemp=pemp-1;
                                      }
                                   }
                                document.getElementById(par).colSpan="1";
                                var xz = document.getElementById(del).insertCell(pemp);
                                
                                xz.id=palue2;
                                xz.setAttribute('ondrop','drop(event,this.id)');
                                //xz.setAttribute('ondragstart','drag2(event,this.id)');
                                xz.setAttribute('ondragover','allowDrop(event)');
                                }
                      }
                }
            } 
    }
    var i;

  if(data2.indexOf(del2) !== -1){

	$.ajax({
   		type: "POST",
    	url: "gen.php",
    	data: {"variable":variableToSend,"val":drid,"year":del,"card":drids,"clash":value4},
    	
    	success: function(data){
       // console.log(data);
    	if(data=="prac"){
        //var mytable = new Table(document.getElementById('mytable'))
        //mytable.merge([drid, value];
        
        if(!childnode){
          var childnode2 = document.getElementById(value2).hasChildNodes();
         if(!childnode2){
        
        for(i=0;i<temp-1;i++){
          if(document.getElementById(del).children[i].colSpan=="2"){
                temp=temp-1;
          }
        }
		     //console.log(temp); 
         document.getElementById(del).deleteCell(temp);
         
         //document.getElementById(value2).style.visibility = "hidden";
         document.getElementById(drids).colSpan="2";
          }
          else{
            flag =1;
            plag = 1;
          window.alert("Cannot place as the Latter slot is occupied!");
          }
		   }
       if(flag==0){
	         document.getElementById(data2).innerHTML= res3;
          
          document.getElementById(data2).style.height = "15px"; 
          document.getElementById(data2).style.border = "thin solid black";
          //document.getElementById(data2).style.position = "relative";
          document.getElementById(data2).style.fontSize = "7px";
          ev.target.appendChild(document.getElementById(data2));
          $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});
      }
		}
		
      if(data=="nolastslotprac"){
        plag = 1;
        window.alert("This is the last slot of the day.Therefore, 2 hours practical cannot be added here!");
      }
      if(data=="nopracbreak"){
          plag=1;
      }
      if(data=="teaclash"){
        plag = 1;
          window.alert("Teacher Clash!");
      }
      if(data=="roomclash"){
        plag = 1;
          window.alert("Classroom Clash!");
      }

      if(data.indexOf("elec") !== -1){

        /*var currentchild = document.getElementById(drid).innerHTML;
        var substrlab = "_Lab";
        var substrtut = "_Tut";
        if(currentchild.indexOf(substrtut) !== -1 || currentchild.indexOf(substrlab) !== -1)
        console.log(currentchild);*/
        var countelec = data[data.length -1]; //count of elective subjects
        var cntelec = parseInt(countelec);
        var cht = 60/cntelec; // 60px is card height
        var cht2 = cht.toString();
        var cht3 = cht2+"px";
        var childcntelec = document.getElementById(drids).getElementsByClassName("card").length;
        //console.log(childcntelec);
        //if(childcntelec<cntelec){
        document.getElementById(data2).style.height=cht3;
        document.getElementById(data2).innerHTML= res2;
        document.getElementById(data2).style.fontSize = "7px";
          
          //.log(cntelec);
          
            document.getElementById(data2).style.border = "thin solid black";
          
            
        ev.target.appendChild(document.getElementById(data2));
        $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});
        //}
        /*
        else{
          window.alert("Elective subject Limit is reached!");
        }*/
      }
      if(data=="nopr"){
        plag = 1;
        window.alert("Teacher is not available for the Latter slot!");
      }
		if(data=="true"){
        if(!childnode){
          document.getElementById(data2).style.fontSize = "8px";
			  ev.target.appendChild(document.getElementById(data2));
			  $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});
      }
		}
		if(data=="false"){
      plag = 1;
			window.alert("Teacher is not available for this slot!");
		}
    if(plag!=1){
      plag=0;
      //console.log(plag);
    }
    plagvalue(plag);

		}
    
	});
      
  }
  else{}
    
 
}
function disbox(abc){
  document.getElementById(abc).style.cursor = "move";
  var b = document.getElementById("displaybox");
  b.innerHTML = document.getElementById(abc).innerHTML; 
}
function cleartxt(){
    // highlight the mouseleave target
    document.getElementById("displaybox").innerHTML= "";
}

function drop3(data2,drids) {

  //ev.preventDefault();
  //var data2 = ev.dataTransfer.getData("text");
  var drid = drids.substr(drids.length -2);
  var par = document.getElementById(data2).parentElement.id;
  var prid = par.substr(par.length -2);
  var variableToSend = document.getElementById(data2).innerHTML;
 // var childnode = document.getElementById(drid).hasChildNodes();
  var c = document.getElementById(drids).childElementCount;
  var del = document.getElementById(drids).parentNode.id;
  var del2 = del.slice(0, 2);
  //console.log(del2);
  //console.log(del);
  var lab = "_Lab";
  var val2 = parseInt(drid);
  var pal2 = parseInt(prid);
  var val3 = val2+1;
  var pal3 = pal2+1;
  var val4 = val2-1;
  var prev = val4.toString();
  var values = val3.toString();
  var palues = pal3.toString();
  var value2 = drids.slice(0, -2).concat(values);
  var palue2 = par.slice(0,-2).concat(palues);
  var value3 = drids.slice(0,-2);
  var value4,value5,value6,value7,value8,value9,value10,value11,value12,value13;
  //for clash logic
   if(value3=="se"){
      if(drid[drid.length -1] !="0"){
      value4 = "te".concat(prev); value5 = "be".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
          value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "te".concat(drid);
            value4 = document.getElementById(value4).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "te".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
            
          }
          else
          {
            value5 = "be".concat(drid);
            value4 += document.getElementById(value5).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "be".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
          //console.log(value4);
      
    }
    else
     {
      value4 = "te".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "be".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "te".concat(values);
              value7 = "be".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }

     }
    
  }
   else if(value3=="te"){
      if(drid[drid.length -1] !="0"){
      value4 = "se".concat(prev); value5 = "be".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
            value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "se".concat(drid);
            value4 = document.getElementById(value4).innerText;
             if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
            
          }
          else
          {
            value5 = "be".concat(drid);
            value4 += document.getElementById(value5).innerText;
             if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "be".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
        //console.log(value4);
    }
    else
     {
      value4 = "se".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "be".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              value7 = "be".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }

     }
    
  }
   else if(value3=="be"){
      if(drid[drid.length -1] !="0"){
      value4 = "se".concat(prev); value5 = "te".concat(prev);
          
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){
              value4 = document.getElementById(value4).innerText;
            
          }
          else
          {
            value4 = "se".concat(drid);
            value4 = document.getElementById(value4).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
            }
          }
          
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){
            value4 += document.getElementById(value5).innerText;
          
          }
          else
          {
            value5 = "te".concat(drid);
            value4 += document.getElementById(value5).innerText;
            if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value7 = "te".concat(values);
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
          }
        //console.log(value4);
    }
    else
     {
      value4 = "se".concat(drid);
      value4 = document.getElementById(value4).innerText;
      value5 = "te".concat(drid);
      value4 += document.getElementById(value5).innerText;
      if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){
              value6 = "se".concat(values);
              value7 = "te".concat(values);
              if(document.getElementById(value6)!=null)
                value4 += document.getElementById(value6).innerText;
              if(document.getElementById(value7)!=null)
                value4 += document.getElementById(value7).innerText;
            }
     }
    
  }
  else if(value3=="sema"){
      if(drid[drid.length -1] !="0"){
      value4 = "tema".concat(prev); value5 = "bema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "tema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "tema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "tema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "tema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
           
}
else if(value3=="tema"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "bema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "bema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "bema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
}
else if(value3=="bema"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "semb".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText;if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "semb".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "semb".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    
}
else if(value3=="semb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "temb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "temb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "temb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    
}
else if(value3=="temb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "semb".concat(prev); value8 = "bemb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "bemb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "bemb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
   
}
else if(value3=="bemb"){
      if(drid[drid.length -1] !="0"){
      value4 = "sema".concat(prev); value5 = "tema".concat(prev); value6 = "bema".concat(prev); value7 = "semb".concat(prev); value8 = "temb".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "sema".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
          if(document.getElementById(value8)!=null && document.getElementById(value8).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value8).innerText;}
          else{value8 = "temb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value13 = "temb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
    }
    else
     { value4 = "sema".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "tema".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "bema".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "semb".concat(drid); value4 += document.getElementById(value7).innerText; value8 = "temb".concat(drid); value4 += document.getElementById(value8).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "sema".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "tema".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "bema".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "semb".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}value13 = "temb".concat(values); if(document.getElementById(value13)!=null){value4 += document.getElementById(value13).innerText;}}}
  
}
else if(value3=="fea"){
    if(drid[drid.length -1] !="0"){
      value4 = "feb".concat(prev); value5 = "fec".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "feb".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "feb".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "feb".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "feb".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}  
}
else if(value3=="feb"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "fec".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12= "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "fec".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "fec".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}   
}
else if(value3=="fec"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fed".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fed".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fed".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}   
}
else if(value3=="fed"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fec".concat(prev); value7 = "fee".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fee".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fee".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}    
}
else if(value3=="fee"){
    if(drid[drid.length -1] !="0"){
      value4 = "fea".concat(prev); value5 = "feb".concat(prev); value6 = "fec".concat(prev); value7 = "fed".concat(prev); 
          if(document.getElementById(value4)!=null && document.getElementById(value4).innerHTML.indexOf(lab) !== -1){value4 = document.getElementById(value4).innerText;}
          else{value4 = "fea".concat(drid);  value4 = document.getElementById(value4).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}}}
          if(document.getElementById(value5)!=null && document.getElementById(value5).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value5).innerText;}
          else{value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;}}}
          if(document.getElementById(value6)!=null && document.getElementById(value6).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value6).innerText;}
          else{value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;}}}
          if(document.getElementById(value7)!=null && document.getElementById(value7).innerHTML.indexOf(lab) !== -1){ value4 += document.getElementById(value7).innerText;}
          else{value7 = "fed".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value12 = "fed".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}
    }
    else
     { value4 = "fea".concat(drid); value4 = document.getElementById(value4).innerText; value5 = "feb".concat(drid); value4 += document.getElementById(value5).innerText; value6 = "fec".concat(drid); value4 += document.getElementById(value6).innerText; value7 = "fed".concat(drid); value4 += document.getElementById(value7).innerText; if(document.getElementById(data2).innerHTML.indexOf(lab) !== -1){value9 = "fea".concat(values); if(document.getElementById(value9)!=null){value4 += document.getElementById(value9).innerText;}
value10 = "feb".concat(values); if(document.getElementById(value10)!=null){value4 += document.getElementById(value10).innerText;} value11 = "fec".concat(values); if(document.getElementById(value11)!=null){value4 += document.getElementById(value11).innerText;} value12 = "fed".concat(values); if(document.getElementById(value12)!=null){value4 += document.getElementById(value12).innerText;}}}    
}
//clash logic ends here

  var flag = 0;
  var plag;
  var qwe; 
  var dayindex;
   var dayno = drid[drid.length -2];
   
        var temps = val3 % 10;
        
  if(dayno=="1"){
          dayindex=1;
        }
        else if(dayno=="2"){
          dayindex=8;
        
        }
        else if(dayno=="3"){
          dayindex=15;
        
        }
        else if(dayno=="4"){
          dayindex=22;
        
        }
        else if(dayno=="5"){
          dayindex=29;
        
        }
        var temp = dayindex+temps;
        var childnode = document.getElementById(drids).hasChildNodes();
        
         var res = variableToSend.replace("<br>", " ");
         var res2 = res.replace("<br>", " ");
         var res3 = res2.replace("<br>", " ");

var payindex;
 
var payno = prid[prid.length -2];
var pemps = pal3 % 10;
   if(payno=="1"){
          payindex=1;
        }
        else if(payno=="2"){
          payindex=8;
        
        }
        else if(payno=="3"){
          payindex=15;
        
        }
        else if(payno=="4"){
          payindex=22;
        
        }
        else if(payno=="5"){
          payindex=29;
        
        }
        var pemp = payindex+pemps;

       
   function plagvalue(ab){
   plag = ab;
   qwe = ab;
    var j;
      //console.log(qwe);
        //return qwe;
            if(plag==0){
               
                if(document.getElementById(data2).innerHTML.indexOf("_Lab") !== -1){
                      if(document.getElementById(par).colSpan=="2"){
                          var y = document.getElementById(par).childElementCount;
                          //var c1 = document.getElementById(par).hasChildNodes();
                               if(y==0){
                                for(j=0;j<pemp-1;j++){
                                    if(document.getElementById(del).children[j].colSpan=="2"){
                                            pemp=pemp-1;
                                      }
                                   }
                                document.getElementById(par).colSpan="1";
                                var xz = document.getElementById(del).insertCell(pemp);
                                
                                xz.id=palue2;
                                xz.setAttribute('ondrop','drop(event,this.id)');
                                //xz.setAttribute('ondragstart','drag2(event,this.id)');
                                xz.setAttribute('ondragover','allowDrop(event)');
                                }
                      }
                }
            } 
    }
    var i;
    //return qwe;
  if(data2.indexOf(del2) !== -1){

  $.ajax({
    'async': false,
      type: "POST",
      url: "gen.php",
      data: {"variable":variableToSend,"val":drid,"year":del,"card":drids,"clash":value4},
      
      success: function(data){
        
      if(data=="prac"){
        //var mytable = new Table(document.getElementById('mytable'))
        //mytable.merge([drid, value];
        
        if(!childnode){
          var childnode2 = document.getElementById(value2).hasChildNodes();
         if(!childnode2){
        
        for(i=0;i<temp-1;i++){
          if(document.getElementById(del).children[i].colSpan=="2"){
                temp=temp-1;
          }
        }
         //console.log(temp); 
         document.getElementById(del).deleteCell(temp);
         
         //document.getElementById(value2).style.visibility = "hidden";
         document.getElementById(drids).colSpan="2";
          }
          else{
            flag =1;
            plag = 1;
          //window.alert("Cannot place as the Latter slot is occupied!");
          }
       }
       if(flag==0){
        //if(document.getElementById(drids).innerText.indexOf("_Lab") !== -1){
           document.getElementById(data2).innerHTML= res3;
          document.getElementById(data2).style.height = "15px"; 
          document.getElementById(data2).style.border = "thin solid black";
          //document.getElementById(data2).style.position = "relative";
          document.getElementById(data2).style.fontSize = "7px";
          document.getElementById(drids).appendChild(document.getElementById(data2));
          $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});

        //}
        //else{plag=1;}
      }
    }
    
      else if(data=="nolastslotprac"){
        plag = 1;
       // window.alert("This is the last slot of the day.Therefore, 2 hours practical cannot be added here!");
      }
      else if(data=="nopracbreak"){
          plag=1;
      }
      else if(data=="teaclash"){
        plag = 1;
         // window.alert("Teacher Clash!");
      }
      else if(data=="roomclash"){
        plag = 1;
         // window.alert("Classroom Clash!");
      }

      if(data.indexOf("elec") !== -1){

        /*var currentchild = document.getElementById(drid).innerHTML;
        var substrlab = "_Lab";
        var substrtut = "_Tut";
        if(currentchild.indexOf(substrtut) !== -1 || currentchild.indexOf(substrlab) !== -1)
        console.log(currentchild);*/
        var countelec = data[data.length -1]; //count of elective subjects
        var cntelec = parseInt(countelec);
        var cht = 60/cntelec; // 60px is card height
        var cht2 = cht.toString();
        var cht3 = cht2+"px";
        var childcntelec = document.getElementById(drids).getElementsByClassName("card").length;
        //console.log(childcntelec);
        //if(childcntelec<cntelec){
        document.getElementById(data2).style.height=cht3;
        document.getElementById(data2).innerHTML= res2;
        document.getElementById(data2).style.fontSize = "7px";
          
          //.log(cntelec);
          
            document.getElementById(data2).style.border = "thin solid black";
          
            
        document.getElementById(drids).appendChild(document.getElementById(data2));
        $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});
        //}
        /*
        else{
          window.alert("Elective subject Limit is reached!");
        }*/
      }
      else if(data=="nopr"){
        plag = 1;
        //window.alert("Teacher is not available for the Latter slot!");
      }
    else if(data=="true"){
        if(!childnode){
          document.getElementById(data2).style.fontSize = "8px";
        document.getElementById(drids).appendChild(document.getElementById(data2));
        $.post('storecarddetails.php', {val1:data2,val2:drids,year:del});
      }
      else{
        plag=1;
      }
    }
    else if(data=="false"){
      plag = 1;
      //window.alert("Teacher is not available for this slot!");
    }
    if(plag!=1){
      plag=0;
      //console.log(plag);
    }
    //console.log(plag);
    plagvalue(plag);

    }
    
  });
      
  }
  else{plag = 1;}
   return plag;
 
}