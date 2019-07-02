var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost/order/";
}
else{
    Api="http://omysstudent.com/omys_admin/";
}



function addSupplier(){
   
    let supplierName = document.getElementById("supplierName").value;
    let checkRequired = true; 

    if(supplierName == ''){
        alert("Kindly Type Supplier Name")
        checkRequired = false;
    }

    if(checkRequired){
        console.log("insertCheck");
    fetch(Api + 'backend/addSupplier.php', {
        method: 'POST',
        body: JSON.stringify({
            supplierName: supplierName
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            if(responseJson == "Success"){
                alert("Supplier Successfully Inserted");
                window.location.href = "supplier.php";
            }
            
        })
        .catch((error) => {
            console.log(error);
            alert("Not Inserted");
            window.location.href = "supplier.php";

        });
    }
   



}



function indexPage(){
  
   
}
function onLoadFunction(param){
    
    
}