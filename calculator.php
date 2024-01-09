<!DOCTYPE html>
<html>
    <head>
        <title>Calculate your GPA</title>
        <link rel="stylesheet" href="calculator.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="calculator.js"></script>
        <script src="GPAcalculator.js"></script>
    </head>
<body>
    <?php include 'header.php';?>
    <script>
        setTimeout(function(){
            document.body.style.opacity = 1;
        },500);
    </script>
    <div class="main-div">
        <div class="sub-main-div" id="sub-main-div">
         <div class="text-div">
            <h1>Calculate your GPA </h1>
        </div>
        <form name="form">
        <div class="subject-text-grade">
            <div class="subject-module" id="subject-module">
                <input type="text" class="Module-name" name="Subject" id="subject" placeholder="Enter the Module Name" required/>
            </div>
            <div id="grade-module" class="grade-for-the-module">
                <input type="text" class="Module-grade" id="Grade" name="Grade" placeholder="Enter the Grade" required/>
            </div>
            <div id="credits-got" class="credits-got">
                <input type="text" class="credits" name="Credit" id="credits" placeholder="Enter the credits You have got" required/>
            </div>
        </div>
        <div class="button-area" id="button-area">
            <button type="button" class="add" value="Add Module" onclick="addModule()">Add Module</button>
            <button type="button" class="remove" value="Remove Module" onclick="removeModule()">Remove Module</button>
            <input type="button" class="calculate" value="Calculate" onclick="calculateGPA()"/>
        </div>
        <script></script>   
        <div class="answer-div" id="answer-div">
            <input type="text" class="answer" id="answer" placeholder="Your GPA will be displayed here" readonly>
            <center>
                <input type="submit" value="Save" id="save" style="display: block;position: relative;" onclick="save()">
                <input type="reset" value="Reset" id="reset" onclick="sendbtnremove()"/>
            <script>
                document.getElementById("save").style.display = 'none';
            </script></center>
        </div>
     </form>       
        </div>

    </div>
    <?php include 'footer.php';?>
</body>
</html>