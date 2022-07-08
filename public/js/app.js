 
      $(document).ready(function(){

    setTimeout(function(){
         $('#sessionhide').hide();
        }
        ,1000);


     });
    
function addInput(){

     tot.value=Number(tot.value)+1;
     divobj=document.createElement('div');
     divobj.setAttribute('id',"childdiv-"+tot.value);

     lblobj=document.createElement('label');
     lblobj.setAttribute('for',"t"+tot.value);
 

                    lblbr=document.createElement('br');
     lbltxt=document.createTextNode('Address - '+tot.value);
         lblobj.appendChild(lbltxt);
   
      
      

     divobj.appendChild(lblobj);
      divobj.appendChild(lblbr);

     inputobj=document.createElement('textarea');
     inputobj.setAttribute('id',"t"+tot.value);
      inputobj.setAttribute('name',"address[]");
       inputobj.setAttribute('class',"form-control");

   divobj.appendChild(inputobj);
   maindiv.appendChild(divobj);



}
 