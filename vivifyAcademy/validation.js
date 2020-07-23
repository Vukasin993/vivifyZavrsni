
function validationFormPost() {
    var x = document.forms["create"]["title"].value;
    var y = document.forms["create"]["body"].value;
    var z = document.forms["create"]["author"].value;
    var c = document.forms["create"]["created_at"].value;
    if (x == "" || y == "" || z == "" || c == "") {
        
        <div class="alert alert-danger">Author, Title, Body or Date is empty!</div>
        
    }
}
