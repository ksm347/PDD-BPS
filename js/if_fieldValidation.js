/**
 * @category Javascript file for field validations
 * This file is used to make validation checks like check for numeric, alphanumeric characters and so on
 */

/*delete confirmation function*/
function confirmdelete()
{
    var x=confirm("Are you sure u want to delete this item?");
    if(x)
    return true;
    else
    return false;
}



// JavaScript Document

/**
 * @Purpose: This function is used to change all letters written in atextbox to uppercase.
 * @Example: For changing text case.
 * @Usage:	  onKeyPress='return allcapital(field_id)'
*/

function allCapital(x)
{
    var pi=document.getElementById(x).value;
    document.getElementById(x).value=pi.toUpperCase();
    document.getElementById(x).style.backgroundColor="#FFFFFF";    
}

/**
 * @Purpose: This function is used to change all letters written in a textbox to lowercase.
 * @Example: For changing text case.
 * @Usage:	  onKeyPress='return allSmall(field_id)'
*/
function allSmall(id)
{
    var pi=document.getElementById(id).value;
    document.getElementById(id).value=pi.toLowerCase();
    document.getElementById(id).style.backgroundColor="#FFFFFF";
}

/**
 * @Purpose: This function is used to change the first alphabet of a string written in a textbox to uppercase.
 * @Example: For changing text case of first alphabet.
 * @Usage:	  onKeyPress='return firstLetterCapital(field_id)'
*/
function firstLetterCapital(id)
{
    var uname4=document.getElementById(id).value;
    document.getElementById(id).style.backgroundColor="#FFFFFF";
    var p=0;
    var dotpresent=0;
    var uname3=uname4;
    var templen;
    templen=uname4.length;

    for(p=uname4.length-1;p<=uname4.length-1;p++)
    {

        if(uname4.charCodeAt(p)==32 && n==0)
        {
            //uname1=uname1.substring(0,templen);
            n=1;
        }
        if(uname4.charCodeAt(p)!="32"  &&  n==1)
        {

            var chr=uname4.substring(uname4.length-1);
            uname3=uname3.substring(0,templen-1);
            chr=chr.toUpperCase(chr);
            n=0;
            document.getElementById(id).value=uname3+chr;
        }


    }
    if(uname4.length==1)
    {
        document.getElementById(id).value=uname4.toUpperCase();
    }

}





/**
 * @Purpose: This function is used to restrict the user to type alpha numerics without space (0-9 and a-z and A-Z).
 * @Example: For enetering alphanumeric data.
 * @Usage:	  onKeyPress='return enterAlphaNumeric(event)'
*/
var n=0;
function enterAlphaNumericWithoutSpace(e,id)
{
    //alert("in alpha numeris")
    var key=0;

    if (!e) var e = window.event;

    // e gives access to the event in all browsers
    if(!e.which)
    {
        key = e.keyCode; // This is used store the keycode(IE Only)
    //alert(key);
    }
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8)
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else
    {
        key=0;
        
        return false;

    }

}



/**
 * @Purpose: This function is used to restrict the user to type numerics.
 * @Example: For enetering numeric data.
 * @Usage:	  onKeyPress='return enterNumerics(event,field_id)'
*/

function enterNumerics(e,id)
{
    //alert("in nummerics")
    var key=0;
    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==8||key==9||(key==13))
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else{

        key=0;
       
        return false;
    }

}// @End enterNumerics(e)


/**
 * @Purpose: This function is used to restrict the user to type numerics (0-9) only.
 * @Example: For enetering only numeric data.
 * @Usage:	  onKeyPress='return numeric(event)'
*/
function numeric(e)
{		//only allows numbers to be keyed into textbox
     var k;
     document.all ? k = e.keyCode : k = e.which;
	 if  ((k > 1 && k < 8) ||(k > 8 && k < 45) || (k > 57) )
	 {
		 return false;
	 }
}


/**
 * @Purpose: This function is used to restrict the user to type numerics (0-9) and - only.
 * @Example: For enetering only numeric data.
 * @Usage:	  onKeyPress='return numeric(event)'
*/
function numericdash(e)
{		//only allows numbers and - to be keyed into textbox
     var k;
     document.all ? k = e.keyCode : k = e.which;
	 if  ((k > 1 && k < 8) ||(k > 8 && k < 45) || (k > 57) )
	 {
		 return false;
	 }
}

/**
 * @Purpose: This function is used to restrict the user to type alpha numerics.
 * @Example: For enetering alphanumeric data.
 * @Usage:	  onKeyPress='return enterAlphaNumeric(event,field_id)'
*/
function enterAlphaNumeric(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||(key==13) ||(key==32)|| (key==39)||(key==127))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else
    {
       key=0;
        
        return false;
    }

}// @End enterAlphaNumeric(e)

/**
 * @Purpose: *This function is used to restrict the user to type alphabets with space only (a-z and A-Z).
 * @Example: For enetering strings contains only alphabetic data.
 * @Usage:	  onKeyPress='return enterAlpha(event,field_id)'.
*/

function enterAlpha(e,id)
{
        var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||(key==13))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}//@End enterAlpha(e)



/**
 * @Purpose: *This function is used to restrict the user to type alphabets with space and hyphen only (a-z and A-Z).
 * @Example: For enetering strings contains only alphabetic data and hyphen.
 * @Usage:	  onKeyPress='return enterAlphaWithHyphenSpace(event,field_id)'.
*/

function enterAlphaWithHyphenSpace(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||(key==13)||(key==45))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}//@End enterAlpha(e)


/**
 * @Purpose: *This function is used to restrict the user to type alphabets with space, comma and hyphen only (a-z and A-Z).
 * @Example: For enetering strings contains only alphabetic data, comma and hyphen.
 * @Usage:	  onKeyPress='return enterAlphaWithHyphenCommaSpace(event,field_id)'.
*/

function enterAlphaWithHyphenCommaSpace(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||(key==13)||(key==44)||(key==45))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}//@End enterAlpha(e)





/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with space.
 * @Example: For enetering alphanumeric data with space.
 * @Usage:	  onKeyPress='return enterAlphaNumericWithSpace(event,field_id)'
*/

function enterAlphaNumericWithSpace(e,id)
{
    //alert("in alpha numeris")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||key==0||(key==13))
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else
    {
        key=0;
       
        return false;
    }

}// @End enterAlphaNumeric(e)

/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with space and hyphen.
 * @Example: For enetering alphanumeric data including space and hyphen.
 * @Usage:	  onKeyPress='return enterAlphaNumericWithSpaceAndHyphen(event,field_id)'
*/

function enterAlphaNumericWithSpaceAndHyphen(e,id)
{
    //alert("in alpha numeris")
    var key=0;
    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||key==45||(key==13)||(key==47))
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else
    {
        key=0;
       
        return false;
    }

}// @End enterAlphaNumeric(e)

/**
 * @Purpose: This function is used to restrict the user to type alphabets with Dot and Underscore.
 * @Example: For enetering alphabets data including dot and underscore.
 * @Usage:	  onKeyPress='return enterAlphaWithDotandUnderscore(event,field_id)'
*/
function enterAlphaWithDotandUnderscore(e,id)
{
    //alert("Enter Numerics Only");
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==46 || key==95||(key==13)||(key==9)||(key==8)||(key==46))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {

        key=0;
       
        return false;

    }

}// @End enterAlphaNumeric(e)

/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with dot, underscore and at the rate.
 * @Example: For enetering alphanumeric data including dot, underscore and at the rate symbol.
 * @Usage:	  onKeyPress='return enterAlphaWithDotUnderscoreandAttheRate(event,field_id)'
*/
function enterAlphaNumWithDotUnderscoreandAttheRate(e,id)
{
    //alert("Enter Numerics Only");
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if(((key>=65)&&(key<=90))||((key>=48)&&(key<=57))||(key>=97)&&(key<=122)||key==46 || key==95||(key==13)||(key==9)||(key==8)||(key==46)||(key==50)||(key==64))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {

        key=0;
        

        return false;

    }

}// @End enterAlphaNumeric(e)



/**
 * @Purpose: This function is used to restrict the user to type alpha numerics.
 * @Example: For enetering alphanumeric data.
 * @Usage:	  onKeyPress='return isAlphaNumeric(event,field_id)'
*/
function isAlphaNumeric(e,id)
{
    //  if (val== "") return true;

    // var charpos = val.search("[^0-9A-Za-z]");
    //  if(val.length > 0 &&  charpos >= 0)
    //  {
    //alert("Can use alphabets and numbers only");
    //	return false;
    //  }

    // return true;
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)
    //alert(key);
    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9 || key==32||(key==13))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}//@End isAlphaNumeric(val)


/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with forward slash.
 * @Example: For enetering alphanumeric data with forward slash.
 * @Usage:	  onKeyPress='return enterAlphaNumericFSlash(event,field_id)'
*/
function enterAlphaNumericFSlash(e,id)
{
    //alert("in alpha numeric")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||(key==13)||(key==47))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
       
        return false;

    }

}

/**
 * @Purpose: This function is used to restrict the user to type numerics with forward slash.
 * @Example: For enetering numeric data with forward slash.
 * @Usage:	  onKeyPress='return enterNumericFSlash(event,field_id)'
*/
function enterNumericFSlash(e,id)
{
    //alert("in alpha numeric")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==8||key==9||(key==13)||(key==39)||(key==47))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        key=0;
       
        return false;

    }

}



/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with comma.
 * @Example: For enetering alphanumeric data with comma.
 * @Usage:	  onKeyPress='return enterAlphaNumericComma(event,field_id)'
*/
function enterAlphaNumericComma(e,id)
{
    //alert("in alpha numeric")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==44 ||key==45||(key==13))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}

/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with space and comma.
 * @Example: For enetering alphanumeric data including comma and space.
 * @Usage:	  onKeyPress='return enterAlphaNumericCommaWithSpace(event,field_id)'
*/
function enterAlphaNumericCommaWithSpace(e,id)
{
    //alert("in alpha numeric")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==44 ||key==45||key==32||(key==13))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}

/**
 * @Purpose: This function is used to restrict the user to type numerics with comma.
 * @Example: For enetering numeric data including comma.
 * @Usage:	  onKeyPress='return enterNumericComma(event,field_id)'
*/
function enterNumericComma(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==8||key==9||key==44 ||key==45||(key==13))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}

/**
 * @Purpose: This function is used to restrict the user to type alpha numerics with dot, hyphen, Single qoute and Ampersand symbol.
 * @Example: For enetering alphanumeric data including dot, hyphen, Single qoute and Ampersand symbol.
 * @Usage:	  onKeyPress='return enterAlphaWithAmpCommaHyphenDotSquote(event,field_id)'
*/
function enterAlphaWithAmpCommaHyphenDotSquote(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==32||(key==39)||(key==13)||(key==46)||(key==222)||(key==188)||(key==190)||(key==189)||(key==38))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}//@End enterAlpha(e)

/**
 * @Purpose: This function is used to restrict the user to type alphabets without space.
 * @Example: For enetering Alphabetic data without space.
 * @Usage:	  onKeyPress='return enterAlphaWithoutSpace(event,field_id)'
*/
function enterAlphaWithoutSpace(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||(key==39)||(key==13))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
       
        return false;

    }

}//@End enterAlpha(e)

/**
 * @Purpose: This function is used to restrict the user to type alphanumerics with special characters.
 * @Example: For enetering alphanumeric data including special characters.
 * @Usage:	  onKeyPress='return enterAlphaNumericAndSpecialCharacters(event,field_id)'
*/
function enterAlphaNumericAndSpecialCharacters(e,id)
{
 
    //alert("in alpha numeris")
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||(key>=32)&&(key<=47)||(key>=58)&&(key<=64)||(key>=91)&&(key<=96)||(key>=123)&&(key<=126)||(key==166)||(key==13)||(key==37)||(key==39)||(key==46)||(key==38)||(key==40))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {
        
        key=0;
        
        return false;

    }

}// @End enterAlphaNumeric(e)

/**
 * @Purpose: This function is used to restrict the user from typing special characters.
 * @Example: For entering alphanumeric data without special characters.
 * @Usage:	  onKeyPress='return SplCharacters(field_id)'
*/
function SplCharacters(Val) {

    var alp = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    for (var i=0;i<Val.value.length;i++){
        temp=Val.value.substring(i,i+1);
        if (alp.indexOf(temp)==-1){
            alert("No special characters \nValid entries are [a-z][A-Z][0-9]");
            Val.focus();
            return 0;
        }
    } // closing the for loop

}


/**
 * @Purpose: This function is used to trim spaces in a field.
 * @Example: For cutting out unnecessary spaces in a field.
 * @Usage:	  onKeyPress='return trim(value)'
*/
function trim(val)
{
    return LTrim(RTrim(val));

}//@End trim(val)

/**
 * @Purpose: This function is used to trim spaces on the left of the string.
 * @Example: For trimming spaces to the left of the string.
 * @Usage:	  onKeyPress='return LTrim(string)'
*/
function LTrim(String)
{
    
    var i = 0;
    var j = String.length - 1;

    if (String == null)
        return (false);

    for (i = 0; i < String.length; i++)
    {
        if (String.substr(i, 1) != ' ' && String.substr(i, 1) != '\t')
            break;
    }

    if (i <= j)
        return (String.substr(i, (j+1)-i));
    else
        return ('');
}//@End LTrim(String)


/**
 * @Purpose:       This function is used to trim the right side of string .
 * @Return Value:  returns right trimmed string
 * @Usage:	 		RTrim(strValue)
*/
function RTrim(String)
{

    var i = 0;
    var j = String.length - 1;

    if (String == null)
        return (false);

    for(j = String.length - 1; j >= 0; j--)
    {
        if (String.substr(j, 1) != ' ' && String.substr(j, 1) != '\t')
            break;
    }

    if (i <= j)
        return (String.substr(i, (j+1)-i));
    else
        return ('');
}//@End RTrim(String)




/**
 * @Purpose: This function is used to restrict the user from typing special characters.
 * @Example: For entering alphanumeric data without special characters.
 * @Usage:	  onKeyPress='return enterAlphaWithHyphen(event.field_id)'
*/
function enterAlphaNumericWithHyphen(e,id)
{
    /*
@Purpose:       This function is used to split the string.Pass the string and delemiter as arguments
@Return Value:  returns array contains array of values
@Usage:	 		splitString(strValue,delimiter)
*/
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)
    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==45||(key==13))
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else{
        key=0;
       
        return false;
    }

}// @End enterAlphaNumericsWithHyphen(e)

/**
 * @Purpose: This function is used to restrict the user to typing alphanumerics and slash.
 * @Example: For entering alphanumeric data with hyphen and Slash.
 * @Usage:	  onKeyPress='return enterAlphaWithHyphenandSlash(event,field_id)'
*/
function enterAlphaNumericWithHyphenandSlash(e,id)
{
   
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)
    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==45||key==92||key==47||(key==13))
    {
        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;
    }
    else
    {
        key=0;
        
        return false;
    }
}

/**
 * @Purpose: This function is used to restrict the user to typing alphanumerics and hyphen.
 * @Example: For entering alphanumeric data with hyphen.
 * @Usage:	  onKeyPress='return SplCharactersWithHyphen(value)'
*/
function SplCharactersWithHyphen(Val) {

    var alp = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-";

    for (var i=0;i<Val.value.length;i++){
        temp=Val.value.substring(i,i+1);
        if (alp.indexOf(temp)==-1){
            alert("No special characters \nValid entries are [a-z][A-Z][0-9] and '-'");
            Val.focus();
            return 0;
        }
    } // closing the for loop

}

function alphaNumericWithSpecialChar(e,f)
{
    //alert(f.value.length);
    if (e.keyCode)
    {
        keycode=e.keyCode;
    }
    //alert(keycode);
    //alert("in valid cahr js")
    if (keycode!=37 && keycode!=38 && keycode!=39 && keycode!=40 && keycode!=8 && keycode!=13 && keycode!=46 && keycode!=32)
    {
        for (i=0;i<f.value.length+1;i++)
        {
            var regExp=new RegExp("[a-zA-Z0-9]");// '|' \$ '|' , '|' @ '|' # '|' ~ '|' ` '|' \% '|' \* '|' \^ '|' \& '|' \( '|' \) '|' \+ '|' \=  '|' \- '|' \_  '|' \[ '|'\.");
            s=f.value.charAt(i);
            if (s!=" " && s!="." && s!="," && s!="'" && s!=";" && s!="(" && s!=")" && s!="{" && s!="}" && s!="[" && s!="]" && s!="*" && s!="" && s!="\n" && s!="\t")
            {
                if(!regExp.test(s))
                {
                    f.value=f.value.replace(s,"");
                }
            }
        //alert(s);
        }
    }
}


function caseIdValidation(e)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)
    //alert(key);
    if((key>=48)&&(key<=57)||(key==8)||key==9||(key==47)||(key==37)||(key==39)||(key==46)||(key==38)||(key==40))

    {

        key=key;
        return true;

    }
    else
    {
        key=0;
        return false;

    }
}

/**
 * @Purpose: This function is used to restrict the user to typing numerics and dot.
 * @Example: For entering numeric data with dot.
 * @Usage:	  onKeyPress='return enterNumericDot(event,field_id)'
*/
function enterNumericDot(e,id)
{
    var key=0;
    var st=document.getElementById(id).value;
    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==8||key==9||key==46||(key==13)||(key==39))
    {
        //to check whether '.' exists
        if (key==46 && st.indexOf('.')!=-1)
        {
            return false;
        }
        if (st.length==2)
        {
            var i;
            //var st=document.getElementById(txtId).value;
            for (i=0;i<st.length;i++)
            {
                if (st.charAt(i)=='.')
                {
                    return;
                }
            }
            if (key!=46)
            {
                document.getElementById(id).value=document.getElementById(id).value +'.';
            }
        }
        key=key;
        return true;

    }
    else
    {
        key=0;
        return false;

    }

}


/**
 * @Purpose: This function is used to restrict the user to typing numerics and hyphen.
 * @Example: For entering numeric data with hyphen.
 * @Usage:	  onKeyPress='return enterNumericHyphen(value)'
*/
function enterNumericHyphen(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==8||key==9||key==45||(key==13)||(key==46))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}



/**
 * @Purpose: This function is used to restrict the user to typing numerics and colon.
 * @Example: For entering numeric data with colon.
 * @Usage:	  onKeyPress='return enterNumericcolon(value)'
*/
function enterNumericcolon(e,id)
{
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||key==58)
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}



/**
 * @Purpose: This function is used to restrict the user to typing alphanumerics and special characters.
 * @Example: For entering alphanumeric data with special characters.
 * @Usage:	  onKeyPress='return enterAlphaNumWithSpecialChar(event,field_id)'
*/
function enterAlphaNumWithSpecialChar(e,id)
{
    //special characters like '/' '.' '-'
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122)||key==8||key==9||key==47||key==46||key==45||(key==13)||(key==37)||(key==39)||(key==38)||(key==40))
    {
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        key=key;
        return true;

    }
    else
    {
        key=0;
        
        return false;

    }

}


// this is Js to disable back buton

//function stopPropagation(e)
//{
//e = e||event; /* get IE event ( not passed ) */
////alert(e.keyCode);
//e.stopPropagation? e.stopPropagation() : e.cancelBubble = true;
//}
//
//var x = false;
//function checkShortcut(e)
//{
//
//stopPropagation(e);
//
//var t=event.srcElement.type;
//try{
//if(t && (type=='text' || type=='textarea' || type=='file'))
//{
////do not cancel the event
//}
//
//
//else
//{
//	if(event.keyCode==8 || event.keyCode==13)
//	{
//	alert("Use of backspace is strictly prohibited.");
//	if( x )
//	return true;
//	return false;
//	}
//	}
//}
//catch(e)
//{
//}
//}
//
//function attachHandlerStart()
//{
//        alert("calles");
//var dlist = document.getElementsByTagName('html');
//for( var i = 0; i < dlist.length; i++ )
//{
//attachHandler(dlist.item(i));
//}
//}
//function attachHandler(node)
//{
//// Iterate the dom, attaching the onkeypress event to all of the items
//if( node.nodeType == 1 ) // Element
//{
//node.onkeydown = checkShortcut;
////alert('Attached checkShortcut to '+node.nodeName);
//
//// Iterate the children of this node
//var children = node.childNodes;
//for( var i = 0; i < children.length; i++ )
//{
//attachHandler(children.item(i));
//}
//}
//}

/**
 * @Purpose: This function is used to restrict the user to typing alphanumerics with dot and underscore.
 * @Example: For entering alphanumeric data with dot and underscore.
 * @Usage:	  onKeyPress='return enterAlphaNumWithDotandUnderscore(event,field_id)'
*/
function enterAlphaNumericWithDotandUnderscore(e,id)
{
    //alert("Enter Numerics Only");
    var key=0;

    if (!e) var e = window.event;
    // e gives access to the event in all browsers
    if(!e.which) key = e.keyCode; // This is used store the keycode(IE Only)
    else key = e.which; // This is used store the keycode(Netscape Only)

    if((key>=48)&&(key<=57)||(key>=65)&&(key<=90)||(key>=97)&&(key<=122) ||key==8||key==9 ||key==46 || key==95||(key==13)||(key==39))
    {

        key=key;
        document.getElementById(id).style.backgroundColor="#FFFFFF";
        return true;

    }
    else
    {

        key=0;
        return false;

    }

}// @End enterAlphaNumeric(e)


/**
 * @Purpose: This function is used to validating an email id.
 * @Example: For validating email id format.
 * @Usage:	  onKeyPress='return validateEmail(field_name)'
*/
function validateEmail(txtName){
    //alert("in validateEmail")
    var email=txtName;

    if(!isEmail(email))
    {
        alert("Please enter a valid Email ID.");
        return false;

    }

    return true;
}//@Start validateEmail(txtName)

function isEmail(email) {
    // A very simple email validation checking.
    // you can add more complex email checking if it helps
    var splitted = email.match("^(.+)@(.+)$");
    if(splitted == null) {
        return false;
    }
    if(splitted[1] != null ) {
        var regexp_user=/^\"?[\w-_\.\']*\"?$/;
        var len=splitted[1].length;
        var dotPos=0;
        var chkFlag=true;
        for (var i=0;i<len ;i++){
            if (splitted[1].substring(i,i+1)=="."){
                if(chkFlag){
                    dotPos=i;
                    chkFlag=false;
                }
                if (dotPos==i-1||dotPos==0||dotPos==len-1) return false;
                if (!chkFlag) dotPos=i;
            }
        }
        if(splitted[1].match(regexp_user) == null) {
            return false;
        }
    }

    if(splitted[2] != null) {
        var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;

        var leng=splitted[2].length;
        var dotPost=0;
        var chckFlag=true;
        for (i=0;i<leng ;i++ )
        {
            if (splitted[2].substring(i,i+1)==".")
            {
                if(chckFlag)
                {
                    dotPost=i;
                    chckFlag=false;
                }

                if (dotPost==i-1||dotPost==0||dotPost==leng-1) return false;

                if (!chckFlag) dotPost=i;


            }
        }

        if(splitted[2].match(regexp_domain) == null) {
            var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
            if(splitted[2].match(regexp_ip) == null) {
                return false;
            }
        }// if
        return true;
    }

    return false;
}//@End isEmail(email)

//@ Start validateMobile
function validateMobile( field, errorMsg) {

  phoneRegex = /^\d{10}$/;
  if(!field.match( phoneRegex ) ) {
  alert( errorMsg );
  return false;
 }
 return true;
}   // ValidateMobile ends
	

/**
 * @Purpose: This function is used to disable other select options.
 * @Example: Select 1 will be enabled 2 & 3 will be disabled.
 * @Usage:	  onclick='disable23()'
*/
function disableButton23() {
    document.getElementById("select1").disabled = false;
    document.getElementById("select2").disabled = true;
    document.getElementById("select3").disabled = true;
}

function disableButton13() {
    document.getElementById("select1").disabled = true;
    document.getElementById("select2").disabled = false;
    document.getElementById("select3").disabled = true;
}

function disableButton12() {
    document.getElementById("select1").disabled = true;
    document.getElementById("select2").disabled = true;
    document.getElementById("select3").disabled = false;
}

/**
 * @Purpose: This function is used to validate password and confirmation.
 * @Example: For validating password.
 * @Usage:   onKeyPress='return checkForm(form)'
*/  
function checkForm(form) {
    if(form.password.value!==form.confirm.value)
        {
            alert("Error: Passwords do not match");
            form.password.focus();
            return false;
        }
    return true;
}

// JS ends