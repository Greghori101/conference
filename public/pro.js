const container=document.querySelector(".container");   
    hide=document.querySelectorAll(".hide");
    pass=document.querySelectorAll(".password");
for (let i = 0 ; i < 2; i++) {
    hide[i].addEventListener("click",function(){
        if(pass[i].type == "password"){
            pass[i].type ="text";
            hide[i].classList.remove("uil-eye");
            hide[i].classList.add("uil-eye-slash");
        }else{
            pass[i].type = "password";
            hide[i].classList.remove("uil-eye-slash");
            hide[i].classList.add("uil-eye")
        }
        
    });
}
    
        
        document.querySelector(".btnp").addEventListener('click',function(){
            document.querySelector(".bg-modal").style.display = "flex";
        });
        document.querySelector(".bbb").addEventListener('click',function(){
            document.querySelector(".bg-modal").style.display = "none";
        });
        /*hide.forEach(eyeicon =>{
            eyeicon.addEventListenerr("click",()=>{
                pass.forEach(pas=> {
                    if(pass.type === "password"){
                        pass.type ="text";
                        hide.classList.remove("uil-eye");
                        hide.classList.add("uil-eye-slash");
                    }else{
                        pass.type = "password";
                        hide.classList.remove("uil-eye-slash");
                        hide.classList.add("uil-eye")
                    }
                })
            })
        });*/
        /*hide.addEventListener("click",function(){
                if(pass.type === "password"){
                    pass.type ="text";
                    hide.classList.remove("uil-eye");
                    hide.classList.add("uil-eye-slash");
                }else{
                    pass.type = "password";
                    hide.classList.remove("uil-eye-slash");
                    hide.classList.add("uil-eye")
                }
                
            });*/
        