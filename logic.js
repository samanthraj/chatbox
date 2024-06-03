
window.addEventListener("keydown",(e)=>{
    if(e.key==="Enter")
        {
            update();
            location.reload();
           
        }
})

function update(){
    location.reload();
    let mesg = messege.value;
    messege.value= "";
fetch(`msg.php?msg=${mesg}`)
}



let msgdiv = document.querySelector(".msg ");
fetch("dr.php").then((r)=>{
    if(r.ok){
        return r.text();
    }
    else{
        console.log("error");
    }
}).then(
    (d)=>{
        msgdiv.innerHTML=d;
        
       
    }
)
let inputmsg = document.querySelector("#messege")
//  emoji button
let emojidiv = document.querySelector(".emojilist");
let emojibutton = document.querySelector("#emojibutton");
let ul = document.querySelector( ".emojilist ul ");

emojibutton.addEventListener("click",()=>{

emojidiv.classList.toggle('active');

});



let k = [];
let lis;
fetch("https://emojihub.yurace.pro/api/all")
    .then(response => {
        if (response.ok) {
            console.log("Request successful");
            return response.json();
        } else {
            console.log("Error: Request failed");
            return response.json(); // Parse response body as JSON
        }
    }).then(
      async (d)=>{
        
       k = await d.map((emoji)=>{

            return emoji.unicode;
          
                 })
                 for (i in k){
                    let li = document.createElement("li");
                    let code = k[i].length==1?k[i]:k[i][0];
                    let stringcode = code.toString();
                    let parsed = parseInt(stringcode.substring(2),16);
                    let emojicharactor = String.fromCodePoint(parsed);
                   li.textContent =emojicharactor;
                   ul.appendChild(li);
                }        
          
                 lis  =  document.querySelectorAll(".emojilist ul li");
                 for (let lik of lis) {

                    lik.addEventListener("click",()=>{
                   messege.value+=lik.textContent;
                    })
                 }
                 
              
            })
            
            





         
              

       

        
       
    

   