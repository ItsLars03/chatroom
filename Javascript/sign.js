const form = document.querySelector(".signup form")
let continueBtn = document.getElementById("continue-to-chat-button");


form.onsumbit = (e)=>{
    e.preventDefault(); 
}

continueBtn.addEventListener("click", ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        console.log(xhr)
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
} ) 

