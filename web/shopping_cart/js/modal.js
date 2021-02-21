let modal = document.getElementById('checkoutModal');
// debugger;
let btn = document.getElementsByClassName('add_btn');

let span = document.getElementsByClassName('close')[0];

let id_product = '';

btn.onclick=function(){
    debugger;
    modal.style.display = "block";
}

//Close modal
// span.onclick=function(){
//     modal.style.display = "none";
// }

window.onclick=function(event){
    if(event.target == modal){
        modal.style.display = "none";
    }
}

this.openForm=function(x){
    debugger;
    id_product = x;

}

// $(".quick_look").on("click", function() {
//     debugger;
//     var product_id = $(this).data("id");
//         var options = {
//                 modal: true,
//                 height: 'auto',
//                 width:'70%'
//             };
//         $('#checkoutModal').load('get-product-info.php?id='+product_id).dialog(options).dialog('open');
// });
