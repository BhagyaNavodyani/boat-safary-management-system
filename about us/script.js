const username = document.querySelector
('.username');

const email = document.querySelector
('email');

const message = document.querySelector
('.message');

const button = document.querySelector
('.btn');

username.addEventListener
('click',()=>
{
   username.style. 
   backgroundcolor='white';

})

username.addEventListener('blur',()=>
{
       username.style. 
       backgroundcolor='red';
    
})

email.addEventListener('click',()=>
{
       email.style. 
       backgroundcolor='white';
    
})

email.addEventListener('blur',()=>
{
       email.style. 
       backgroundcolor='red';
    
})

message.addEventListener('click',()=>
{
           message.style. 
           backgroundcolor='white';
        
 })
    
message.addEventListener('blur',()=>
{
           message.style. 
           backgroundcolor='red';
        
})

button.addEventListener('click',(event)=>{
    
    if(username.value ==""|| email.value =="")
        {
            alert("frome can't be empty");
            event.preventDefault();
        }



    
});