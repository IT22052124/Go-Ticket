function buttons(data){

    if(data =="logout"){
        
        window.location.href="index.php";
    }
    else if(data =="goback"){
        window.location.href="#home page";
    }
    else if(data=='edit'){
        window.location.href="profileedit.php";
    }
}