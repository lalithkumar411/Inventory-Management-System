function addNewItem(){
  document.getElementById("newitem").addEventListener("click", function(e){
    window.location.href= "/project-1(PHP)/successs/admin-success.php";
  });
}

function logoutAdmin(){
  document.getElementById("olditem").addEventListener("click", function(e){
    window.location.href= "/project-1(PHP)/HTMLs/Admin-login.php";
  });
}

function viewItem(){
  document.getElementById("viewitem").addEventListener("click", function(e){
    window.location.href= "/project-1(PHP)/successs/admin-viewitem.php";
  });
}

function refreshh(){
  document.getElementById("b1").addEventListener("click", function(e){
    window.location.href="/project-1(PHP)/successs/logic-success.php";
  })
}

function logoutAdmin(){
  document.getElementById("logoutadmin").addEventListener("click", function(e){
    window.location.href="/project-1(PHP)/HTMLs/Admin-login.php";
  })
}
