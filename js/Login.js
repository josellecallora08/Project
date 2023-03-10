const pass =  document.getElementById('password')
function showPassword(){
    if(pass.type === "password"){
        pass.type = "text";
    } else {
        pass.type = "password";
    }
}