var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost/event/";
}
else{
    Api="http://omysstudent.com/omys_admin/";
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



function indexPage(){
  
   
}
function onLoadFunction(param){
    
    
}