var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost/order/";
}
else{
    Api="http://omysstudent.com/omys_admin/";
}


supplierTableLoad();


function supplierTableLoad(){

    // var u_id = localStorage.getItem("u_id");
    // var role = localStorage.getItem("role");

    fetch(Api+'backend/showSupplierTable.php', {
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
     
        document.getElementById("supplierTableBody").innerHTML+= showSupplierTable(tr);

     })

     supplierOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showSupplierTable(data){

 return `
        <tr>
             <td>${data.s_id}</td>
             <td>${data.supplier_name}</td>
         </tr>
         `;
}


function supplierOnclickFunction(){
    var supplierTable = document.getElementById('supplierWholeTable');
 
    for(var i = 1; i < supplierTable.rows.length - 1; i++)
                {
						
                    supplierTable.rows[i].onclick = function()
                    {

                                var idd=this.cells[0].innerHTML;
                                
                                $('#supplierModal').modal('show');



    fetch(Api+'backend/showSingleSupplier.php', {
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
            document.getElementById("supplierId").value =obj.s_id;
            document.getElementById("ssupplierName").value =obj.supplier_name;
          
            console.log(responseJson[0]);
        })
        .catch((error)=>{
            console.error(error);
        });

        }//onclick Funciton

    }//for Loop



}




function supplierUpdate(){
   

    let supplierName = document.getElementById("ssupplierName").value;
    let id = document.getElementById("supplierId").value;
    fetch(Api+'backend/updateSupplier.php', {
        method: 'POST',
        body: JSON.stringify({
            s_id:id,
            supplierName:supplierName,
      
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            alert("Successfully Updated");
            window.location.href  = "supplier.php";           
        })
        .catch((error)=>{
            alert(error);
             alert("Not Updated");
             window.location.href  = "supplier.php";
            // console.error(error);
        });



}


function supplierDelete(){

   var s_id=document.getElementById('supplierId').value;
// alert(s_id);

   fetch(Api+'backend/deleteSupplier.php', {
       method: 'POST',
       body: JSON.stringify({
           s_id: s_id,
          
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           
           alert("Successfully Deleted");

           // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           window.location.href  = "supplier.php";
           
           
           // console.log(responseJson);
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "supplier.php";
           // console.error(error);
       });

}
