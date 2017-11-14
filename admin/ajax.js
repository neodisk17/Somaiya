document.addEventListener('DOMContentLoaded',function(){

  var course=document.getElementById("course");
course.addEventListener('change',year,false);
//false is to prevent from event bubbling



   var year=document.getElementById("year");
   year.addEventListener('change',semester,false);

   var semester=document.getElementById("semester");
   semester.addEventListener('change',subject,false);

   var subject=document.getElementById("subject");

 function year(){

        var xhttp = new XMLHttpRequest();

    var course=this.value;

    if(course=="none"){
      year.innerHTML="<option value='none'>none</option>";
      semester.innerHTML="<option value='none'>none</option>";
    }else{

    xhttp.onreadystatechange = function() {

    if(this.readyState==4 && this.status==200){
        console.log(xhttp.responseText);
    var data=JSON.parse(this.responseText);
    console.log(typeof(data));
    console.log(data.year);

    var year=document.getElementById("year");
    
    year.innerHTML="<option value='none'>none</option>";
    console.log(data.length);
    
    if(data.length==0){
        var option=document.createElement("option");
        var textnode = document.createTextNode("none"); 
        console.log("No values are there");
    }else{
    for(x in data){
      console.log(data[x].year);
      console.log(data[x].year_id);
      
      var textnode = document.createTextNode(data[x].year); 
      var option=document.createElement("option");
      option.value=(data[x].year_id);
      option.appendChild(textnode);
      year.appendChild(option);
    }
}
    // data.forEach(function(value,index){
    //   console.log(value);
    // })
    //document.getElementById("course").innerHTML = xhttp.responseText;
    }
}
    
xhttp.open("GET",'loadYear.php?q='+course+'',true);
xhttp.send();
}

}

function semester(){

        var xhttp = new XMLHttpRequest();

    var year=this.value;
    console.log("Year is "+year);

    if(year=="none"){
       semester.innerHTML="<option value='none'>none</option>";
    }else{
    xhttp.onreadystatechange = function() {

    if(this.readyState==4 && this.status==200){
        console.log(xhttp.responseText);
    var data=JSON.parse(this.responseText);
    console.log(typeof(data));
    console.log(data.year);

    var semester=document.getElementById("semester");
    
    semester.innerHTML="<option value='none'>none</option>";
    console.log(data.length);
    
    if(data.length==0){
        var option=document.createElement("option");
        var textnode = document.createTextNode("none"); 
        console.log("No values are there");
    }else{
    for(x in data){
      console.log(data[x].semester_name);
      console.log(data[x].semester_id);
      
      var textnode = document.createTextNode(data[x].semester_name); 
      var option=document.createElement("option");
      option.value=(data[x].semester_id);
      option.appendChild(textnode);
      semester.appendChild(option);
    }
}
    // data.forEach(function(value,index){
    //   console.log(value);
    // })
    //document.getElementById("course").innerHTML = xhttp.responseText;
    }
}
    
xhttp.open("GET",'loadSemester.php?q='+year+'',true);
xhttp.send();
}

}

function subject(){
   var xhttp = new XMLHttpRequest();

    var semester=this.value;
    console.log("semester is "+semester);

    if(semester=="none"){
       subject.innerHTML="<option value='none'>none</option>";
    }else{
    xhttp.onreadystatechange = function() {

    if(this.readyState==4 && this.status==200){
        console.log(xhttp.responseText);
    var data=JSON.parse(this.responseText);
    console.log(typeof(data));
    console.log(data.year);

    var subject=document.getElementById("subject");
    
    subject.innerHTML="<option value='none'>none</option>";
    console.log(data.length);
    
    if(data.length==0){
        var option=document.createElement("option");
        var textnode = document.createTextNode("none"); 
        console.log("No values are there");
    }else{
    for(x in data){
      console.log(data[x].subject_name);
      console.log(data[x].subject_id);
      
      var textnode = document.createTextNode(data[x].subject_name); 
      var option=document.createElement("option");
      option.value=(data[x].subject_id);
      option.appendChild(textnode);
      subject.appendChild(option);
    }
}
    // data.forEach(function(value,index){
    //   console.log(value);
    // })
    //document.getElementById("course").innerHTML = xhttp.responseText;
    }
}
    
xhttp.open("GET",'loadSubject.php?q='+semester+'',true);
xhttp.send();
}

}

});
