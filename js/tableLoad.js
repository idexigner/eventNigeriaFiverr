var Api='';
var ticketCount = 0;


if(window.location.href.includes("localhost")){
    Api = "http://localhost:8080/event/";
}
else{
    Api="http://softmaticsolution.com/devtolu/";
}





function categoryTableLoad(){

    // var u_id = localStorage.getItem("u_id");
    // var role = localStorage.getItem("role");

    fetch(Api+'backend/showCategoryTable.php', {
     method: 'POST',
     body: JSON.stringify({
       
     }),    
     headers: new Headers({
         'content-type': 'application/json',
         'Accept': 'application/json',
     })
 })
 .then((response) => response.json())
 .then((responseJson) =>{
    //  console.log(responseJson);
     // alluserdata = responseJson;
     responseJson.map((tr)=>{
     
        document.getElementById("categoryTableBody").innerHTML+= showCategoryTable(tr);

     })

     categoryOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showCategoryTable(data){

 return `
        <tr>
             <td>${data.c_id}</td>
             <td>${data.c_name}</td>
         </tr>
         `;
}


function categoryOnclickFunction(){
    var categoryTable = document.getElementById('categoryWholeTable');
 
    for(var i = 1; i < categoryTable.rows.length - 1; i++)
                {
						
                    categoryTable.rows[i].onclick = function()
                    {

                                var idd=this.cells[0].innerHTML;
                                
                                $('#categoryModal').modal('show');



    fetch(Api+'backend/showSingleCategory.php', {
        method: 'POST',
        body: JSON.stringify({
            id: idd,
            
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            var obj=responseJson[0];
            document.getElementById("categoryId").value =obj.c_id;
            document.getElementById("scategoryName").value =obj.c_name;
          
            // console.log(responseJson[0]);
        })
        .catch((error)=>{
            console.error(error);
        });

        }//onclick Funciton

    }//for Loop

}


function categoryUpdate(){
   

    let categoryName = document.getElementById("scategoryName").value;
    let id = document.getElementById("categoryId").value;
    fetch(Api+'backend/updateCategory.php', {
        method: 'POST',
        body: JSON.stringify({
            s_id:id,
            categoryName:categoryName,
      
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            alert("Successfully Updated");
            window.location.href  = "category.php";           
        })
        .catch((error)=>{
            alert(error);
             alert("Not Updated");
             window.location.href  = "category.php";
            // console.error(error);
        });



}


function categoryDelete(){

   var c_id=document.getElementById('categoryId').value;
// alert(s_id);

   fetch(Api+'backend/deleteCategory.php', {
       method: 'POST',
       body: JSON.stringify({
           c_id: c_id,
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           alert("Successfully Deleted");

           // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           window.location.href  = "category.php";
           
           
           // console.log(responseJson);
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "category.php";
           // console.error(error);
       });

}






function eventTableLoad(){


    fetch(Api+'backend/showEventTable.php', {
     method: 'POST',
     body: JSON.stringify({
       
     }),    
     headers: new Headers({
         'content-type': 'application/json',
         'Accept': 'application/json',
     })
 })
 .then((response) => response.json())
 .then((responseJson) =>{
     console.log(responseJson);
     // alluserdata = responseJson;
     responseJson.map((tr)=>{
     
       document.getElementById("eventTableBody").innerHTML+= showeventTable(tr);

     })

     eventOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showeventTable(data){

 return `
        <tr>
             <td>${data.e_id}</td>
             <td>${data.name}</td>
             <td>${data.description}</td>
             <td>${data.c_name}</td>
             <td>${data.location}</td>
             <td>${data.map_link}</td>
             <td>${data.fees}</td>
             <td>${data.date}</td>
             <td>${data.start_time}</td>
             <td>${data.end_time}</td>
             <td>${data.website}</td>
         </tr>
         `;
}


function eventOnclickFunction(){
    var eventTable = document.getElementById('eventWholeTable');
 
    for(var i = 1; i < eventTable.rows.length - 1; i++)
                {
						
                    eventTable.rows[i].onclick = function()
                    {

                                var idd=this.cells[0].innerHTML;
                                
                                $('#eventModal').modal('show');



    fetch(Api+'backend/showSingleEvent.php', {
        method: 'POST',
        body: JSON.stringify({
            id: idd,
            
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            var obj=responseJson[0];

            document.getElementById("addToCalenderButton").innerHTML=""; 
            addToCalender = obj.addToCalender;
             var btnTag,btnTextNode;
            if(addToCalender == "no"){
                btnTag = document.createElement("button");
                btnTag.setAttribute("class","btn btn-success btn-lg ");
                btnTag.setAttribute("onClick","addToCalenderFunction('yes','event','"+obj.e_id+"')");
                btnTag.setAttribute("value","no");
                btnTag.setAttribute("id","btnAddToCalender");

                btnTextNode = document.createTextNode("Add To Calender");

                btnTag.appendChild(btnTextNode);
                document.getElementById("addToCalenderButton").appendChild(btnTag);
            }else{
                btnTag = document.createElement("button");
                btnTag.setAttribute("class","btn btn-warning btn-lg ");
                btnTag.setAttribute("onClick","addToCalenderFunction('no','event','"+obj.e_id+"')");
                btnTag.setAttribute("value","yes");
                btnTag.setAttribute("id","btnAddToCalender");
                
                btnTextNode = document.createTextNode("Remove From Calender");

                btnTag.appendChild(btnTextNode);
                document.getElementById("addToCalenderButton").appendChild(btnTag);
            }
            





            document.getElementById("imgModalEvent").innerHTML ="";



            var imgModalEvent = document.getElementById("imgModalEvent");
            for( var i =0; i<obj.image_length ;i++){

                var anchor = document.createElement("a");
                anchor.setAttribute("href","upload/"+obj.image_name+"_"+i+".jpg");
                anchor.setAttribute("target","_new");

                var img= document.createElement("img");
                img.setAttribute("src","upload/"+obj.image_name+"_"+i+".jpg");
                img.setAttribute("style","width:22%;height:auto;margin:0% 1%");
               
                anchor.appendChild(img);

                imgModalEvent.appendChild(anchor);
            }


            document.getElementById("eventId").value =obj.e_id;
            document.getElementById("sEventName").value =obj.name;
            document.getElementById("seventDesc").value =obj.description;
            document.getElementById("seventCategoryDropdown").value =obj.c_id;
            document.getElementById("sEventLocation").value =obj.location;
            document.getElementById("sEventMap").value =obj.map_link;
            document.getElementById("sEventFees").value =obj.fees;
            document.getElementById("seventDateInput").value =obj.date;
            document.getElementById("seventStartTimeInput").value =obj.start_time;
            document.getElementById("seventEndTimeInput").value =obj.end_time;
            document.getElementById("sEventWebsite").value =obj.website;
            document.getElementById("sPicName").value =obj.image_name;
            document.getElementById("sPicLength").value =obj.image_length;
           
        })
        .catch((error)=>{
            console.error(error);
        });

        }//onclick Funciton

    }//for Loop

}


function eventUpdate(){

    let btnAddToCalender = document.getElementById("btnAddToCalender").value;

    let eventId = document.getElementById("eventId").value;
    let eventName = document.getElementById("sEventName").value;
    let eventDescription = document.getElementById("seventDesc").value;
    var categoryDrop = document.getElementById("seventCategoryDropdown");
        
    var categoryValue = categoryDrop.options[categoryDrop.selectedIndex].value;

    let eventLocation = document.getElementById("sEventLocation").value;
    let eventMap = document.getElementById("sEventMap").value;
    let eventFees = document.getElementById("sEventFees").value;
    let eventDateInput = document.getElementById("seventDateInput").value;
    let eventStartTimeInput = document.getElementById("seventStartTimeInput").value;
    let eventEndTimeInput = document.getElementById("seventEndTimeInput").value;
    let eventWebsite = document.getElementById("sEventWebsite").value;

    var PicName = "";
    var PicLength = ""; 
    if(document.getElementById("sfileName").files.length == 0){
        
        
    }   
    else{
        document.getElementById("sPicName").value =  eventName+Math.floor(Math.random() * 100000);
        document.getElementById("sPicLength").value = document.getElementById("sfileName").files.length;
    }
    PicName = document.getElementById("sPicName").value;
    PicLength = document.getElementById("sPicLength").value;
   

    fetch(Api+'backend/updateEvent.php', {
        method: 'POST',
        body: JSON.stringify({
            eventId:eventId,
            eventName:eventName,
            eventDescription:eventDescription,
            categoryValue:categoryValue,
            eventLocation:eventLocation,
            eventMap:eventMap,
            eventFees:eventFees,
            eventDateInput:eventDateInput,
            eventStartTimeInput:eventStartTimeInput,
            eventEndTimeInput:eventEndTimeInput,
            eventWebsite:eventWebsite,
            PicName:PicName,
            PicLength:PicLength,
            btnAddToCalender:btnAddToCalender,
      
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            document.getElementById("sPicEventSubmit").click();
            alert("Successfully Updateded");
            
            window.location.href  = "eventList.php";           
        })
        .catch((error)=>{
            // alert(error);
             alert("Not Updated");
             window.location.href  = "eventList.php";
            
        });



}


function eventDelete(){

   var e_id=document.getElementById('eventId').value;
// alert(s_id);

   fetch(Api+'backend/deleteEvent.php', {
       method: 'POST',
       body: JSON.stringify({
           e_id: e_id,
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           alert("Successfully Deleted");

         
           window.location.href  = "eventList.php";
           
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "eventList.php";
         
       });

}



function eventTicketAddFunction(){

    ticketCount++;

    // <input type="text" class="form-control mb-2" id="eventMap">

    // eventTicketSpan

    var inputTag = document.createElement("input");
    inputTag.setAttribute("type","text");
    inputTag.setAttribute("class","form-control mb-2");
    inputTag.setAttribute("id","eventTicket"+ticketCount);
    inputTag.setAttribute("placeholder","Type Event Ticket");
    
    document.getElementById("eventTicketSpan").appendChild(inputTag);

}



function userTableLoad(){


    fetch(Api+'backend/showUserTable.php', {
     method: 'POST',
     body: JSON.stringify({
       
     }),    
     headers: new Headers({
         'content-type': 'application/json',
         'Accept': 'application/json',
     })
 })
 .then((response) => response.json())
 .then((responseJson) =>{
     console.log(responseJson);
     // alluserdata = responseJson;
     responseJson.map((tr)=>{
     
       document.getElementById("userTableBody").innerHTML+= showuserTable(tr);

     })

     userOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showuserTable(data){

 return `
        <tr>
             <td>${data.u_id}</td>
             <td>${data.u_name}</td>
             <td>${data.phone}</td>
             <td>${data.email}</td>
             <td>${data.username}</td>
             <td>${data.role}</td>
             <td>${data.approve}</td>
             
         </tr>
         `;
}


function userOnclickFunction(){
    var eventTable = document.getElementById('userWholeTable');
 
    for(var i = 1; i < eventTable.rows.length - 1; i++)
                {
						
                    eventTable.rows[i].onclick = function()
                    {

                                var idd=this.cells[0].innerHTML;
                                
                                $('#userModal').modal('show');



    fetch(Api+'backend/showSingleUser.php', {
        method: 'POST',
        body: JSON.stringify({
            id: idd,
            
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            var obj=responseJson[0];

            document.getElementById("userId").value =obj.u_id;
            document.getElementById("uname").value =obj.u_name;
            document.getElementById("uphone").value =obj.phone;
            document.getElementById("uemail").value =obj.email;
            document.getElementById("uuser").value =obj.username;
            document.getElementById("urole").value =obj.role;
            document.getElementById("uapprove").value =obj.approve;
        })
        .catch((error)=>{
            console.error(error);
        });

        }//onclick Funciton

    }//for Loop

}


function userUpdate(){

    let id = document.getElementById("userId").value;
    let name = document.getElementById("uname").value;
    let phone = document.getElementById("uphone").value;
    let email = document.getElementById("uemail").value;
    let username = document.getElementById("uuser").value;
    let role = document.getElementById("urole").value;
    let approve = document.getElementById("uapprove").value;
   
   

    fetch(Api+'backend/updateUser.php', {
        method: 'POST',
        body: JSON.stringify({
            id:id,
            name:name,
            phone:phone,
            email:email,
            username:username,
            role:role,
            approve:approve,
            
      
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
           
            alert("Successfully Updated");
            
            window.location.href  = "manageUser.php";           
        })
        .catch((error)=>{
            // alert(error);
             alert("Not Updated");
             window.location.href  = "manageUser.php";
            
        });



}


function userDelete(){

   var id=document.getElementById('userId').value;
   fetch(Api+'backend/deleteUser.php', {
       method: 'POST',
       body: JSON.stringify({
        id: id,
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           alert("Successfully Deleted");

         
           window.location.href  = "manageUser.php";
           
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "manageUser.php";
         
       });

}

function userPageLoad(){

    
    fetch(Api+'backend/showUserNotApprove.php', {
        method: 'POST',
        body: JSON.stringify({
          
        }),    
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
    .then((response) => response.json())
    .then((responseJson) =>{
        console.log(responseJson);

        var userPageBody = document.getElementById("userPageBody");

        var row = document.createElement("div");
        row.setAttribute("class","row");
        userPageBody.appendChild(row);


       
    for(var i =0; i<responseJson.length;i++){
        var obj = responseJson[i];
   
        
        var parentDiv = document.createElement("div");
        parentDiv.setAttribute("class","col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12");
        row.appendChild(parentDiv);

        var cardDiv = document.createElement("div");
        cardDiv.setAttribute("class","card");
        parentDiv.appendChild(cardDiv);

        var cardBodyDiv = document.createElement("div");
        cardBodyDiv.setAttribute("class","card-body");
        cardDiv.appendChild(cardBodyDiv);

        var h3 = document.createElement("h3");
        h3.setAttribute("class","card-title");
        h3.appendChild(document.createTextNode(obj.u_name));
        cardBodyDiv.appendChild(h3);

        var p = document.createElement("p");
        p.setAttribute("class","card-text");
        cardBodyDiv.appendChild(p);


        var boldCategory = document.createElement("strong");
        boldCategory.appendChild(document.createTextNode("Phone: "));
        p.appendChild(boldCategory);
        p.appendChild(document.createTextNode(obj.phone));
        p.appendChild(document.createElement("br"));

        var boldDate = document.createElement("strong");
        boldDate.appendChild(document.createTextNode("Email: "));
        p.appendChild(boldDate);
        p.appendChild(document.createTextNode(obj.email));
        p.appendChild(document.createElement("br"));

        var boldRemaining = document.createElement("strong");
        boldRemaining.appendChild(document.createTextNode("Username: "));
        p.appendChild(boldRemaining);        
        p.appendChild(document.createTextNode(obj.username));
        p.appendChild(document.createElement("br"));


    

        var button = document.createElement("button");
        button.setAttribute("class","btn btn-success mr-2");
        button.setAttribute("onclick","approveUser('"+obj.u_id+"','yes')");
        button.appendChild(document.createTextNode("Approve"));

        cardBodyDiv.appendChild(button);

        var button2 = document.createElement("button");
        button2.setAttribute("class","btn btn-danger");
        button2.setAttribute("onclick","approveUser('"+obj.u_id+"','reject')");
        button2.appendChild(document.createTextNode("Reject"));

        cardBodyDiv.appendChild(button2);

        
}
    
 
        
    })
    .catch((error)=>{
    console.error(error);
      });

}

function approveUser(id,param){
 
   

    fetch(Api+'backend/approveUser.php', {
        method: 'POST',
        body: JSON.stringify({
            id:id,
            approve:param,
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
           
            alert("Successfully Updated");
            
            window.location.href  = "manageUser.php";           
        })
        .catch((error)=>{
            // alert(error);
             alert("Not Updated");
             window.location.href  = "manageUser.php";
            
        });

    
}


function addToCalenderFunction(param,page,idd){

    // var eventId = document.getElementById("eventId").value;
    
    fetch(Api+'backend/updateEventCalender.php', {
        method: 'POST',
        body: JSON.stringify({
            eventId:idd,
            addToCalender:param,
            
      
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
           
            alert("Successfully Update");

            // alert(page);
            if(page == "event"){
                window.location.href  = "eventList.php";    
            }
            else{
                window.location.href  = "calender.php";    
            }
                   
        })
        .catch((error)=>{
            // alert(error);
             alert("Not Added");
             if(page == "event"){
                window.location.href  = "eventList.php";    
            }
            else{
                window.location.href  = "calender.php";    
            }
            
        });


    

}


function calenderPageLoad(){





    fetch(Api+'backend/showCalender.php', {
        method: 'POST',
        body: JSON.stringify({
          
        }),    
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
    .then((response) => response.json())
    .then((responseJson) =>{
        console.log(responseJson);

        var calenderPageBody = document.getElementById("calenderPageBody");

        var row = document.createElement("div");
        row.setAttribute("class","row");
        calenderPageBody.appendChild(row);


       
    for(var i =0; i<responseJson.length;i++){
        var obj = responseJson[i];
   
        
        var parentDiv = document.createElement("div");
        parentDiv.setAttribute("class","col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12");
        row.appendChild(parentDiv);

        var cardDiv = document.createElement("div");
        cardDiv.setAttribute("class","card");
        parentDiv.appendChild(cardDiv);

        var cardBodyDiv = document.createElement("div");
        cardBodyDiv.setAttribute("class","card-body");
        cardDiv.appendChild(cardBodyDiv);

        var h3 = document.createElement("h3");
        h3.setAttribute("class","card-title");
        h3.appendChild(document.createTextNode(obj.name));
        cardBodyDiv.appendChild(h3);

        var p = document.createElement("p");
        p.setAttribute("class","card-text");
        cardBodyDiv.appendChild(p);


        var boldCategory = document.createElement("strong");
        boldCategory.appendChild(document.createTextNode("Category: "));
        p.appendChild(boldCategory);
        p.appendChild(document.createTextNode(obj.c_name));
        p.appendChild(document.createElement("br"));

        var boldDate = document.createElement("strong");
        boldDate.appendChild(document.createTextNode("Date: "));
        p.appendChild(boldDate);
        p.appendChild(document.createTextNode(obj.date));
        p.appendChild(document.createElement("br"));

        var boldRemaining = document.createElement("strong");
        boldRemaining.appendChild(document.createTextNode("Remaining Days: "));
        p.appendChild(boldRemaining);
        var datePast = obj.date;
        datePast = datePast.substring(0,datePast.indexOf(' '));

        console.log("datepast", datePast)

        dt1 = new Date();
     	dt2 = new Date(datePast);
  
        var daysRemaining =  Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
        var remainingNode = document.createElement("span")
    
        remainingNode.setAttribute("class","remainingNodeStyle");
        remainingNode.appendChild(document.createTextNode(daysRemaining))
        p.appendChild(remainingNode);
        p.appendChild(document.createElement("br"));


        // <button class="btn btn-primary" onclick="" >Remove From Calender</button>

        var button = document.createElement("button");
        button.setAttribute("class","btn btn-primary");
        button.setAttribute("onclick","addToCalenderFunction('no','calender','"+obj.e_id+"')");

        button.appendChild(document.createTextNode("Remove From Calender"));

        cardBodyDiv.appendChild(button);

       

        



        
}
    
 
        
    })
    .catch((error)=>{
    console.error(error);
      });
}