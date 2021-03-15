const nameinput=document.getElementById('name');
const jobNumber=document.getElementById('jobNumber');
const dropzone=document.getElementById('dropzone');
const outzone=document.getElementById('outzone');
$(document).on('click','#save', function(e){
    e.preventDefault();
  
    $.ajax({
        url: '/saveData',
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
         // not POST, laravel won't allow it
         
        data:{
         
            div:document.getElementById('frontzone').innerHTML
        },
        success: function(data){
            console.log(data);	// here comes the login form	
            location.reload();
        },
        error: function(data){
        },
    });
});
$("#profilepic").draggable({
    drag:function(){
      this.style.zIndex="2";
    }
   });
   $("#name").draggable();

function allowDrop(event) {
 event.preventDefault();
}
function changeColor(){
   nameinput.style.backgroundColor=document.getElementById('inputcolor').value;

}
   nameinput.addEventListener('dragstart',e=>{
       e.dataTransfer.setData('text/plain',nameinput.id)
       let x=event.clientX; 
       let y=event.clientY; 
      
 
       nameinput.style.position = "absolute";
       nameinput.style.left = x+'px';
       nameinput.style.top = y+'px';
       nameinput.style.textAlign = "right";
     
       $('#name').appendTo($('#dropzone'));


   })
   jobNumber.addEventListener('dragstart',e=>{
       e.dataTransfer.setData('text/plain',jobNumber.id)
       let x=event.clientX; 
       let y=event.clientY; 
      
 
       jobNumber.style.position = "absolute";
       jobNumber.style.left = x+'px';
       jobNumber.style.top = y+'px';
       jobNumber.style.textAlign = "right";
    


   })
   dropzone.addEventListener('dragover',e=>{
       e.preventDefault()
       dropzone.classList.add("drop-zone--over")
   })
   dropzone.addEventListener("drop",e=>{
       e.preventDefault();
       const droppedelementId=e.dataTransfer.getData('text/plain')
       const droppedelement=document.getElementById(droppedelementId);
       console.log(droppedelement);
       let x=event.clientX; 
       let y=event.clientY; 
      
       droppedelement.style.position = "absolute";
       droppedelement.style.left = x+'px';
       droppedelement.style.top = y+'px';
       dropzone.append(droppedelement);
       // dropzone.appendChild(droppedelement)
       dropzone.classList.remove("drop-zone--over")

   })
   $( "#sortable" ).sortable();
   $( "#sortable" ).droppable();
   $( "#sortable li" ).draggable();
   $( "#sortable" ).disableSelection();
   $("#dropzone").droppable({
       
       drop: function(event, ui) {
           // $(this).css('background', 'rgb(105 1 90)');
           $(this).css('background', 'white');
    
           
       },
       over: function(event, ui) {
           $(this).css('background', 'rgb(101 1 83)');
           // $(this).css('background', 'white');

       },
       out: function(event, ui) {
           $(this).css('background', 'rgb(144 0 200)');
           $(this).css('background', 'white');

       }
   });
   
   outzone.addEventListener("drop",e=>{
       e.preventDefault();
       const droppedelementId=e.dataTransfer.getData('text/plain')
       const droppedelement=document.getElementById(droppedelementId);
       console.log(droppedelement);
       let x=event.clientX; 
       let y=event.clientY; 
      
       droppedelement.style.position = "absolute";
       droppedelement.style.left = x+'px';
       droppedelement.style.top = y+'px';
       // dropzone.appendChild(droppedelement)
       dropzone.classList.remove("drop-zone--over")

   })
  