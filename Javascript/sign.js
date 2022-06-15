const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsumbit = (e)=>{
    e.preventDefault(); 
}

continueBtn.onClick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }

    xhr.send();
}

