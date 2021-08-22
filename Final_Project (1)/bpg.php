<html>
  <link rel="stylesheet" href="css/final.css">
        <script>
            function enable_text(status)
            {
            status=!status;	
            document.f2.Patient_Name.disabled = status;
            document.f2.Contact_Number.disabled = status;
            document.f2.gender.disabled = status;
            document.f2.age.disabled = status;
            document.f2.ta.disabled = status;
            document.f2.Cough.disabled = status;
            document.f2.Cold.disabled = status;
            document.f2.Fever.disabled = status;
            document.f2.Vomitting.disabled = status;
            document.f2.bodypain.disabled = status;
            document.f2.intorgpain.disabled = status;
            document.f2.Allergy.disabled = status;
            document.f2.eye.disabled = status;
            }
            </script>
<body onload=enable_text(false);>
     <!-- Header -->
     <?php include "header.php"; ?>
     <!-- Header -->
    <h1><center>Booking Page</center></h1>
    <fieldset><legend>Please confirm the following details</legend><form name="f1">
        Name of Hospital:<input type="text" name="Hospital Name" id="HospN" readonly><br>
        Name of Doctor:<input type="text" name="DocName" id="DocName" readonly><br>
        Type of Doctor:<input type="text" name="DocName" id="DocType" readonly><br>
        Date          :<input type="date" name="DocName" id="date" readonly><br>
        Appointment Slot:<input type="text" name="DocName" id="slot" readonly><br>
        <input type="checkbox" name="Agree" id="Agree" onclick="enable_text(this.checked)">I have confirmed the above details<br>
    </form></fieldset><br><br>
    <div name="form2">
    <fieldset><legend>Patient's Personal Details</legend><form name="f2" method="POST">
        Name:<input type="text" name="Patient_Name" id="PName" required><br>
        Age:<input type="number" name="Age" id="age" required><br>
        Gender:<input type="radio" name="gender" value="male" id="radio" required>Male
        <input type="radio" name="gender" value="female" id="radio" required>Female
        <input type="radio" name="gender" value="other" id="radio" required>Other<br>
        Contact Number: +91-<input type="number" name="Contact_Number" id="CNo" required><br>
        Address: <textarea name="ta">enter your address</textarea><br><br>
        Symptoms:<br>
        <input type="checkbox" name="Cough" id="Cough">Cough<br>
        <input type="checkbox" name="Cold" id="Cold" >Cold/ Nose block<br>
        <input type="checkbox" name="Fever" id="Fever">Fever<br>
        <input type="checkbox" name="Vomitting" id="Vomitting">Throw up/ Vomitting<br>
        <input type="checkbox" name="bodypain" id="Bodypain">Body pain/Head ache<br>
        <input type="checkbox" name="intorgpain" id="intorgpain">Internal organ pain(Eg. Chest)<br>
        <input type="checkbox" name="Allergy" id="Allergy">Skin allergy/rashes<br>
        <input type="checkbox" name="eye" id="eye">Issues related to the eye<br>
    </form></fieldset></div>
    </body>
    <center><input type="button" value="Confirm Appointment"></center>
</html>