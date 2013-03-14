<form name="myForm">
    <label for="firstname">Age: </label>
    <input type="text" 
onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) ))  return false;"
/>
    <type="submit" value="Login" onclick="return validateForm()">