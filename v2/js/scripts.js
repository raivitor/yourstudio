// Empty JS for your own code to be here
function modalConfirm(){
	//alert("Confirma?");
}


function previewFile(){
   var preview = document.querySelector('img'); //selects the query named img
   var file    = document.querySelector('input[type=file]').files[0]; //sames as here
   var reader  = new FileReader();

   reader.onloadend = function () {
       preview.src = reader.result;
   }

   if (file) {
       reader.readAsDataURL(file); //reads the data as a URL
   } else {
       preview.src = "";
   }
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

function botao(checkbox, botao, id=0) {
  if(checkbox.checked){
    document.getElementById(botao).disabled = false;
  } else{
    document.getElementById(botao).disabled = true;
  }
  if(id==1){
    if(checkbox.checked)
      document.getElementById(botao).style.display = "none";
    else
      document.getElementById(botao).style.display = "block";
  }
}
// https://github.com/blueimp/jQuery-File-Upload
// https://fineuploader.com/demos