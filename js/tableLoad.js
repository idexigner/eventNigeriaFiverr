var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost/event/";
}
else{
    Api="http://omysstudent.com/omys_admin/";
}


categoryTableLoad();


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
