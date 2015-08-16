
//η επόμενη συνάρτηση επιστρέφει true αν το str μοιάζει με email (δεν
//μπορούμε να ξέρουμε σίγουρα αν πράγματι είναι υπαρκτή διεύθυνση email!)
/*str Το value του element που ελέγχουμε το e-mail και res 
 * το αντικείμενο που ελέγχουμε το e-mail έτσι
 *  ώστε να μπορούμε να το τροποποιήσουμε αν δεν είναι έγκυρο */
function looks_like_email(str,res) {
  var result=true; //έστω ότι όλα είναι καλά - θα κάνουμε διάφορους ελέγχους και
                   //εφόσον κάποιος βγάζει πρόβλημα, θα βάλουμε result=false.
  var ampersatPos = str.indexOf("@");   //η θέση του @ στο αλφαριθμητικό
  var dotPos = str.indexOf(".");        //η θέση του . στο αλφαριθμητικό
  //η θέση του . στο αλφαριθμητικό μετά τη θέση του @
  var dotPosAfterAmpersat = str.indexOf(".", ampersatPos);	 
  // αν το @ δεν βρεθεί, η indexOf επιστρέφει -1 ενώ αν είναι πρώτος
  // χαρακτήρας επιστρέφει 0. Σε κάθε περίτπωση δεν είναι αποδεκτό email.
  if (ampersatPos<=0) result = false; 
  // αν δεν υπάρχει καθόλου τελεία δεν είναι email
  if (dotPos<0) result = false; 
  // αν δεν υπάρχει . μετά το @ αλλά όχι αμέσως μετά, τότε δεν είναι email
  if (dotPosAfterAmpersat-ampersatPos==1) result = false; 
  // αν ο πρώτος ή ο τελευταίος χαρακτήρας είναι . τότε δεν είναι email
  if ( str.indexOf(".")==0  ||  str.lastIndexOf(".")==str.length-1 )
    result = false;

//Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου

	res.style.backgroundColor="";
       res.style.border="";
document.getElementById("Mailerr").innerHTML = "";
	if(result == false)
	{
     res.style.backgroundColor="yellow";
       res.style.border="thin solid red";
document.getElementById("Mailerr").innerHTML = "→ Please type a correct e-mail";
	}

  // πιθανώς να απαιτούνται επιπλέον έλεγχοι - ας αρκεστούμε σε αυτούς
  return result;
}
function username(str) // Ελέγχει το username όπου str μεταβλητή κειμένου για error message
{
    var result = true;
    // Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου

    document.getElementById("username").style.backgroundColor="";
       document.getElementById("username").style.border="";
 document.getElementById("Nameerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var username=document.getElementById("username").value;

  // Ακολουθεί regular expression που περιγράφει τους μη επιτρεπτούς χαρακτήρες.
  // Συγκεκριμένα, μη επιτρεπτοί είναι όλα εκτός από 0-9, A-Z, a-z, _ (κάτω παύλα)
	var illegalChars = /\W/;

  // αν υπάρχει στο username μη επιτρεπτός χαρακτήρας ή το μήκος δεν είναι 3
  if (illegalChars.test(username) || username.length < 3) {
    //σημείωσε ότι υπάρχει πρόβλημα
		result=false;
                document.getElementById("username").style.backgroundColor="yellow";
       document.getElementById("username").style.border="thin solid red";
 document.getElementById("Nameerr").innerHTML =str;
  }
  return result;
}


/* Ελέγχει το password όπου str μεταβλητή κειμένου για error message
 * Το element είναι το στοιχείο που θέτουμε ως password για να ελέγχουμε  την εγκυρότητα του
 * Το error είναι το στοιχείο όπου θα στείλουμε το λάθος εάν υπάρχει */
function password(str,element,error) 
{
var result = true;
     //Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου

element.style.backgroundColor="";
      element.style.border="";
error.innerHTML ="";
  var password = element.value; 
  var illegalpass = /^[a-zA-Z0-9_!@]+$/; // Ελέγχει αν υπάρχουν οι παρακάτω χαρακτήρες A-Z a-z 0-9 _ ! @
  if(!illegalpass.test(password) || (password.length <8  ))
  {
  result = false;
  
element.style.backgroundColor="yellow";
      element.style.border="thin solid red";
error.innerHTML =str;
  
  
  }
  
  return result;
}

function ActivationCo() //Ελέγχει εάν το Activation code υπάρχει (απλός έλεγχος πιο πολύπλοκος στο php file)
{
    var result = true;
    //Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου

    document.getElementById("ActivationCode").style.backgroundColor="";
       document.getElementById("ActivationCode").style.border="";   
    document.getElementById("Activeerr").innerHTML ="";

    result = username("→ Wrong Username please put a valid username");
    
    var activecode1 = document.getElementById("ActivationCode").value;
    if(activecode1 == "")
        {
            result = false;
            document.getElementById("ActivationCode").style.backgroundColor="yellow";
       document.getElementById("ActivationCode").style.border="thin solid red";
            document.getElementById("Activeerr").innerHTML = "→ Please put your Activation Code!";
        }
        
        var recaptcha = document.getElementById("security_code").value;
if(recaptcha.length < 5) // Απλός έλεγχος για το αν το Re-Captcha είναι πάνω από το 0 ή όχι
    {
        document.getElementById("security_code").style.backgroundColor="yellow";
       document.getElementById("security_code").style.border="thin solid red";
    result = false;
            
            document.getElementById("Secerr").innerHTML = "→ Type the ReCaptcha";
    }

    
    return result;
    
}
function valid_login() //Ελέγχει το Log In του χρηστη
{
    var result = true;
    result = username("→ Wrong Username please put a valid username");
    result = password("→ Wrong password please put a valid password",document.getElementById('password'),document.getElementById("Passerr"));
    return result;
}


function validate_form() //Ελέγχει το registration form του χρηστη
{
	// αρχικοποιούμε το αποτέλεσμα σε true και θα κάνουμε
	// ελέγχους για να δούμε αν υπάρχει λόγος αλλαγής σε false
	var result = true;
 result = looks_like_email(document.getElementById("Email").value,document.getElementById("Email"));
	// δημιουργούμε κάθε φορά πρόσβαση στο επιθυμητό html στοιχείο
	// ή στο περιεχόμενό του και κάνουμε τους απαραίτητους ελέγχους
 result = username("→ Wrong username. Use Letters,Numbers or underscore! And the username must be above 3 letters");
 result = password("→ Wrong Password. Please follow the Rules!",document.getElementById('PassWord'),document.getElementById('Passerr'));
 var pass = document.getElementById("PassWord").value;

 //Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου

  document.getElementById("RePassword").style.backgroundColor="";
       document.getElementById("RePassword").style.border="";
document.getElementById("Repasserr").innerHTML ="";
var repass = document.getElementById("RePassword").value;
if(pass != repass) // Έλεγχος αν το password είναι ίδιο με το retyped password
    {
        document.getElementById("RePassword").style.backgroundColor="yellow";
       document.getElementById("RePassword").style.border="thin solid red";
document.getElementById("Repasserr").innerHTML ="→ The Passwords does not match";
  
        
    }

//Αρχικοποίηση τον εντολών μορφοποίησης του στοιχείου
document.getElementById("security_code").style.backgroundColor="";
       document.getElementById("security_code").style.border="";
            
        document.getElementById("Secerr").innerHTML = "";
    
var recaptcha = document.getElementById("security_code").value;
if(recaptcha.length < 5) // Απλός έλεγχος για το αν το Re-Captcha είναι κάτω από το 5 
    {
        document.getElementById("security_code").style.backgroundColor="yellow";
       document.getElementById("security_code").style.border="thin solid red";
    result = false;
            
            document.getElementById("Secerr").innerHTML = "→ Type the ReCaptcha";
    }

  // επέστρεψε το αποτέλεσμα
	return result;  
}


function validate_addvilla()
{
   var result = true;
     document.getElementById("AddVilForm_size").style.backgroundColor="";
       document.getElementById("AddVilForm_size").style.border="";
 document.getElementById("Sizeerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var size =document.getElementById("AddVilForm_size").value;
   var illegalsize = /[0-9]+/;
   if(!illegalsize.test(size))
   {
       result = false;
       
        document.getElementById("AddVilForm_size").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_size").style.border="thin solid red";
 document.getElementById("Sizeerr").innerHTML ="→Please Put a number here";
 
    }
    
     document.getElementById("AddVilForm_rooms").style.backgroundColor="";
       document.getElementById("AddVilForm_rooms").style.border="";
 document.getElementById("Roomerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var room =document.getElementById("AddVilForm_rooms").value;
   
   if(!illegalsize.test(room))
   {
       result = false;
       
        document.getElementById("AddVilForm_rooms").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_rooms").style.border="thin solid red";
 document.getElementById("Roomerr").innerHTML ="→Please Put a number here";
 
    }
    
    
     document.getElementById("AddVilForm_restrooms").style.backgroundColor="";
       document.getElementById("AddVilForm_restrooms").style.border="";
 document.getElementById("restrmerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var restroom =document.getElementById("AddVilForm_restrooms").value;
  
   if(!illegalsize.test(restroom))
   {
       result = false;
       
        document.getElementById("AddVilForm_restrooms").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_restrooms").style.border="thin solid red";
 document.getElementById("restrmerr").innerHTML ="→Please Put a number here";
 
    }
    
     document.getElementById("AddVilForm_view").style.backgroundColor="";
       document.getElementById("AddVilForm_view").style.border="";
 document.getElementById("viewerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var view =document.getElementById("AddVilForm_view").value;
   var illegalgrchars = /^[\u0374-\u03FF A-Za-z0-9\.\"\'\!\n\t\r\<br\/\>]+$/;
   if(!illegalgrchars.test(view))
   {
       result = false;
       
        document.getElementById("AddVilForm_view").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_view").style.border="thin solid red";
 document.getElementById("viewerr").innerHTML ="→Please write something in english or Greek ";
 
    }
    
     document.getElementById("AddVilForm_address").style.backgroundColor="";
       document.getElementById("AddVilForm_address").style.border="";
 document.getElementById("addreserr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var address =document.getElementById("AddVilForm_address").value;
  
   if(!illegalgrchars.test(address))
   {
       result = false;
       
        document.getElementById("AddVilForm_address").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_address").style.border="thin solid red";
 document.getElementById("addreserr").innerHTML ="→Please write something in english or Greek ";
 
    }
    
     document.getElementById("AddVilForm_price").style.backgroundColor="";
       document.getElementById("AddVilForm_price").style.border="";
 document.getElementById("priceerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var price =document.getElementById("AddVilForm_price").value;
  var illegalprice = /[0-9]+((\.|\,)[0-9]+)?/;
   if(!illegalprice.test(price))
   {
       result = false;
       
        document.getElementById("AddVilForm_price").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_price").style.border="thin solid red";
 document.getElementById("priceerr").innerHTML ="→Please put a price ";
 
    }
    
     document.getElementById("State").style.backgroundColor="";
       document.getElementById("State").style.border="";
 document.getElementById("stateerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var State =document.getElementById("State").value;
  
   if(State == -1)
   {
       result = false;
       
        document.getElementById("State").style.backgroundColor="yellow";
       document.getElementById("State").style.border="thin solid red";
 document.getElementById("stateerr").innerHTML ="→Please choose a state ";
 
    }
    
    
     document.getElementById("AddVilForm_details").style.backgroundColor="";
       document.getElementById("AddVilForm_details").style.border="";
 document.getElementById("Detailerr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var detail =document.getElementById("AddVilForm_details").value;
  
   if(detail !="" && !illegalgrchars.test(detail))
   {
       result = false;
       
        document.getElementById("AddVilForm_details").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_details").style.border="thin solid red";
 document.getElementById("Detailerr").innerHTML ="→Please write something in english or Greek ";
 
    }
    
     
            var GeoX = document.getElementById('GeoX').value;
            var GeoY = document.getElementById('GeoY').value;
            var illegalmap = /^[0-9 \. \-]+$/; /* Ψάχνει να βρει έναν αποδεκτό αριθμό  που να μοιάζει με συντεταγμένες */
            document.getElementById('GeoLocErr').innerHTML = "";
            document.getElementById('GeoLocErr').style.border = "";
            document.getElementById('GeoLocErr').style.backgroundColor = "";
            if(!illegalmap.test(GeoX) && !illegalmap.test(GeoY))
                {
                    result = false;
                   document.getElementById('GeoLocErr').innerHTML = "→ Please Put the location of your Villa!";
            document.getElementById('GeoLocErr').style.border = "solid 1px red";
            document.getElementById('GeoLocErr').style.backgroundColor = "yellow"; 
                }
                
                
               document.getElementById("AddVilForm_parking").style.backgroundColor="";
       document.getElementById("AddVilForm_parking").style.border="";
 document.getElementById("Parkerror").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var parking =document.getElementById("AddVilForm_parking").value;
  
   if(!illegalsize.test(parking))
   {
       result = false;
       
        document.getElementById("AddVilForm_parking").style.backgroundColor="yellow";
       document.getElementById("AddVilForm_parking").style.border="thin solid red";
 document.getElementById("Parkerror").innerHTML ="→Please Put a number here";
 
    }  
                
   return result;
}

function PhotoCheck()
{
    var result= true;
    
    document.getElementById("ImageDescription").style.backgroundColor="";
       document.getElementById("ImageDescription").style.border="";
 document.getElementById("DescErr").innerHTML ="";
	// λήψη τιμής του υπό εξέταση στοιχείου
	var username=document.getElementById("ImageDescription").value;

  // Ακολουθεί regular expression που περιγράφει τους μη επιτρεπτούς χαρακτήρες.
  // Συγκεκριμένα, μη επιτρεπτοί είναι όλα εκτός από 0-9, A-Z, a-z, _ (κάτω παύλα)
	var illegalChars = /^[\u0374-\u03FF A-Za-z0-9\.\"\'\!\n\t\r\<br\/\>]+$/;

  // αν υπάρχει στο username μη επιτρεπτός χαρακτήρας ή το μήκος δεν είναι 3
  if (!illegalChars.test(username) && username.length > 0 ) {
    //σημείωσε ότι υπάρχει πρόβλημα
		result=false;
                document.getElementById("ImageDescription").style.backgroundColor="yellow";
       document.getElementById("ImageDescription").style.border="thin solid red";
 document.getElementById("DescErr").innerHTML ="Error on Description put something right!";
  }
  return result;
}

function mailcheck()
{
    var result=true;
    result = looks_like_email(document.getElementById('Email').value,document.getElementById('Email'));
    if(result)
    {
        var remail = document.getElementById('Emailreenter');
     remail.style.backgroundColor="";
      remail.style.border="";
document.getElementById("remailerr").innerHTML = "";
        if( document.getElementById('Email').value != remail.value)
        {
            result = false;
            remail.style.backgroundColor="yellow";
      remail.style.border="thin solid red";
document.getElementById("remailerr").innerHTML = "→ Please synchronize the 2 Email entries!";
        }
    }
    return result;
}

function passcheck()
{
    var result=true;
    result = password("→ Wrong password please put a valid password",
    document.getElementById('Password'),document.getElementById("PassErr"));
    
    if(result)
    {
        var remail = document.getElementById('RePassword');
     remail.style.backgroundColor="";
      remail.style.border="";
document.getElementById("RePassErr").innerHTML = "";
        if( document.getElementById('Password').value != remail.value)
        {
            result = false;
            remail.style.backgroundColor="yellow";
      remail.style.border="thin solid red";
document.getElementById("RePassErr").innerHTML = "→ Please synchronize the 2 password entries!";
        }
    }
    return result; 
}

function themecheck()
{
    var result = true;
    var id = document.getElementById('ThemeSelector');
    id.style.backgroundColor="";
      id.style.border="";
      document.getElementById("SelErr").innerHTML = "";
      var illegal = /[0-9]/;
     
      if(!illegal.test(id.value))
      {
          
          result = false;
           id.style.backgroundColor="yellow";
      id.style.border="thin solid red";
document.getElementById("SelErr").innerHTML = "→ Please Choose right!";
      }
      
      return result;
}