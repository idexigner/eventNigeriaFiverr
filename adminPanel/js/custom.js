var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost:8080/event/";
}
else{
    Api="http://softmaticsolution.com/devtolu/"
}

function createCookie(cookieName, cookieValue, daysToExpire) {
    var date = new Date();
    date.setTime(date.getTime() + (daysToExpire * 24 * 60 * 60 * 1000));
    document.cookie = cookieName + "=" + cookieValue;

}

function accessCookie(cookieName) {
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for (var i = 0; i < allCookieArray.length; i++) {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name) == 0)
            return temp.substring(name.length, temp.length);
    }
    return "";
}



function addCategory(){
//    debugger
    let categoryName = document.getElementById("categoryName").value;
    let checkRequired = true; 

    if(categoryName == ''){
        alert("Kindly Type Category Name")
        checkRequired = false;
    }

    if(checkRequired){
        console.log("insertCheck");
        console.log(categoryName);
        console.log(Api);
    fetch(Api+'backend/addCategory.php', {
        method: 'POST',
        body: JSON.stringify({
            categoryName: categoryName
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            if(responseJson == "Success"){
                alert("Category Successfully Inserted");
                window.location.href = "category.php";
            }
            
        })
        .catch((error) => {
            console.log(error);
            alert("Not Inserted");
            window.location.href = "category.php";

        });
    }
   



}

function eventCategoryDropdown(param){

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
        console.log(responseJson);
        alluserdata = responseJson;
        
        for(var i=0; i<responseJson.length; i++){

            var o = new Option(responseJson[i].c_name, responseJson[i].c_id);
            /// jquerify the DOM object 'o' so we can use the html method
            $(o).html(responseJson[i].c_name);
            $(param).append(o);

        }

       
        
   
      
    })
    .catch((error)=>{
    console.error(error);
      });

}

function addEvent(){
    //    debugger
        var eventName = document.getElementById("eventName").value;
        let eventDesc = document.getElementById("eventDesc").value;
        
        var categoryDrop = document.getElementById("eventCategoryDropdown");
        
        var categoryValue = categoryDrop.options[categoryDrop.selectedIndex].value;
        

        let eventLocation = document.getElementById("eventLocation").value;
        let eventLongitude = document.getElementById("eventLongitude").value;
        let eventLatitude = document.getElementById("eventLatitude").value;
        let eventFees = document.getElementById("eventFees").value;

        // var eventTicket =[];

        var eventTicket;
        for(var i =0 ; i<ticketCount+1 ; i++){
            if(i==0){
                eventTicket = "[";
                eventTicket += `"`+document.getElementById("eventTicket"+i).value+`"`;
            }else{
                eventTicket += `,"`+document.getElementById("eventTicket"+i).value+`"`;

            }
           
            if(i == ticketCount){
                eventTicket += "]";
            }

        }

        console.log("eventTicket", eventTicket);


        let eventDateInput = document.getElementById("eventDateInput").value;
        let eventStartTimeInput = document.getElementById("eventStartTimeInput").value;
        let eventEndTimeInput = document.getElementById("eventEndTimeInput").value;
        let eventWebsite = document.getElementById("eventWebsite").value;

        var PicName = "";
        var picLength = document.getElementById("fileName").files.length;
        if(document.getElementById("fileName").files.length == 0){
            PicName = '';
            
        }   
        else{
            PicName =  eventName+Math.floor(Math.random() * 100000);
        }
        document.getElementById("PicName").value = PicName;

        // JSON.stringify(eventTicket);
        // console.log(eventTicket)
        // eventTicket ="blah";

        // eventTicket = eventTicket.toString();

        let userId = accessCookie("userId");

        let role = accessCookie("role")
        

        fetch(Api+'backend/addEvent.php', {
            method: 'POST',
            body: JSON.stringify({
                eventName:eventName,
                eventDesc:eventDesc,
                categoryValue:categoryValue,
                eventLocation:eventLocation,
                eventLongitude:eventLongitude,
                eventLatitude:eventLatitude,
                eventFees:eventFees,
                eventTicket:eventTicket,
                eventDateInput:eventDateInput,
                eventStartTimeInput:eventStartTimeInput,
                eventEndTimeInput:eventEndTimeInput,
                eventWebsite:eventWebsite,
                PicName:PicName,
                picLength: picLength,
                userId:userId,
                role:role,
               
            }),
            headers: new Headers({
                'Content-Type': 'application/json',
            })
    
        })
            .then((response) => response.json())
            .then((responseJson) => {
                console.log(responseJson);

                document.getElementById("PicEventSubmit").click();
                if(responseJson == "Success"){
                    alert("Event Successfully Inserted");
                    window.location.href = "event.php";
                }
                
            })
            .catch((error) => {
                console.log(error);
                alert("Not Inserted");
                window.location.href = "event.php";
    
            });
        
       
    
    
    
    }


function blogin(){

    var username = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    fetch(Api + 'backend/blogin.php', {
        method: 'POST',
        body: JSON.stringify({
            username: username,
            pass: pass
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            
           
            if (responseJson === "Wrong Details") {
                alert("Wrong Details");
                window.location.href = "dashboard.php";
            }
            else if(responseJson == "invalid"){
                alert("Invalid Characters");
                window.location.href = "dashboard.php";
            }
            else {
                createCookie("role",responseJson.role,1);
                createCookie("userId",responseJson.u_id,1);
                createCookie("username",responseJson.username,1);
                window.location.href = "dashboard.php";
            }
           

        })
        .catch((error) => {
            // console.error(error);
            alert('Failed');

            window.location.href = "index.php";
        });
  
   
}


function logout(){

    createCookie("role","");
    createCookie("userId","");
    createCookie("username","");
    window.location.href = "index.php";


}
function register(){

    let checkRequired =true;
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let passwordConfirm = document.getElementById("passwordConfirm").value;
    
    if(password !== passwordConfirm){
        checkRequired =false;
        alert("Kindly Enter Correct Password in both field");
    }
   
    

    if(checkRequired){
    fetch(Api+'backend/addRegister.php', {
        method: 'POST',
        body: JSON.stringify({


            name:name,
            phone:phone,
            email:email,
            username:username,
            password:password
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);

         
            if(responseJson == "Success"){
                alert("Thank you for Registration, Your account will be active within 24 hours");
                window.location.href = "index.php";
            }
            
        })
        .catch((error) => {
            console.log(error);
            alert("Not Inserted");
            window.location.href = "index.php";

        });
    }
    
   

}
function onLoadFunction(param){

    document.getElementById("headerName").innerHTML = accessCookie("username");
console.log(accessCookie("role"));
    if(accessCookie("role") == "Organizer"){
        console.log("Reach inside meu");
        document.getElementById("categoryMenu").style.display = "none";
        // document.getElementById("eventListMenu").style.display = "none";
        document.getElementById("manageUserMenu").style.display = "none";
        // document.getElementById("dashboardMenu").style.display = "none";
    }

    if(param == "eventPage"){
        document.title = "EVENT";
        eventCategoryDropdown("#eventCategoryDropdown");

    }
    else if(param == "categoryPage"){
        document.title = "CATEGORY";
        categoryTableLoad();
    }
    else if(param == "eventListPage"){
        document.title = "EVENT LIST";
        if(accessCookie("role") == "Admin"){
            eventApprovePageLoad();
        }
        
        eventTableLoad();
        eventCategoryDropdown("#seventCategoryDropdown");
    }
    else if(param == "calenderPage"){
        document.title = "CALENDER";
        calenderPageLoad();
    }
    else if(param == "manageUserPage"){
        document.title = "MANAGE USER";
        userPageLoad();
        userTableLoad();
    }
    
}

