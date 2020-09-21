function validateData()
{
    let email= document.getElementById('Email').value;
   if(emailValidation(email) === false)
   {
    alert('invalid email');
   }
}
function validateSignup()
{
    let email= document.getElementById('Email').value;
    let name= document.getElementById('userName').value;
    
    if((emailValidation(email) === false)||(nameValidation(name)===false))
     {
         if(nameValidation(name)===false)
         {
            alert('invalid name');
         }
         if(emailValidation(email) === false)
         {
            alert('invalid email');
         } 
    }
 
}
function emailValidation(email)
{
    let regex=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if(regex.test(email)==true)
    {
        return true;
    }
    else
    {
        return false;
    }

}
function phoneValidation(phone)
{
    let regex=/(01)[0-9]{9}/;
    if(regex.test(phone)==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function nameValidation(name) 
{
    let regex=/^[a-zA-Z]+(([a-zA-Z ])?[a-zA-Z]){1,10}$/;
    if(regex.test(name)==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function dateValidation(date)
{
    let regex=/^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;
    if(regex.test(date)==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validateClientData()
{
    let Title=document.getElementById('Title').value;
    let Discreption=document.getElementById('Discreption').value;
    let Phone=document.getElementById('Phone').value;
    let StartDate=document.getElementById('StartDate').value;
    let EndDate=document.getElementById('EndDate').value;
    if((nameValidation(Title) === false)||(phoneValidation(Phone)===false))
    { 
        if(nameValidation(Title) === false)
        { 
            alert('invalid Title');
            
        }
        else
        {
            alert('invalid phone');
            
        }
        return false;
       
    }else if((dateValidation(StartDate) === false)||(dateValidation(EndDate)===false))
    {
        alert('date is not valid');
        return false;
       
    }
}


