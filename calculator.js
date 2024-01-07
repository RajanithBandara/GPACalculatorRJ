let x = 0;

function addModule() {
    x = x + 1;
    var container1 = document.getElementById("subject-module");
    var container2 = document.getElementById("grade-module");
    var container3 = document.getElementById("credits-got");

    var input1 = document.createElement("input");
    var input2 = document.createElement("input");
    var input3 = document.createElement("input");
    var linebreak = document.createElement("br");

    input1.type = "text";
    input2.type = "text";
    input3.type = "text";
    input1.name = "Subject";
    input2.name = "Grade";
    input3.name = "Credit";
    input1.className = "Module-name";
    input2.className = "Module-grade";
    input3.className = "credits";
    input1.placeholder = "Enter the Module Name";
    input2.placeholder = "Enter the Grade";
    input3.placeholder = "Enter the credits You have got";

    container1.appendChild(input1);
    //container1.after(linebreak);

    container2.appendChild(input2);
    //container2.after(linebreak);

    container3.appendChild(input3);
    //container3.after(linebreak);

    console.log(x);
}

function removeModule() {
    var container1 = document.getElementById("subject-module");
    var container2 = document.getElementById("grade-module");
    var container3 = document.getElementById("credits-got");
    var brelement = container1.lastElementChild;
    var brelement2 = container2.lastElementChild;
    var brelement3 = container3.lastElementChild;

    container1.removeChild(container1.lastChild);
    container2.removeChild(container2.lastChild);
    container3.removeChild(container3.lastChild);
    if (brelement && brelement.tagName === 'BR'){
        container1.removeChild(brelement);
        container2.removeChild(brelement2);
        container3.removeChild(brelement3);
    }
    

    x = x - 1;
    console.log(x);
}

function calculateGPA(){
    gpa_value = 0;
    var gpa_array = [];
    var credits_array = [];
    var credits_to_gpa = [];
    var total_credits = 0;
    var grades = document.getElementsByClassName("Module-grade");
    var credits = document.getElementsByClassName("credits");
    for (var i=0; i<grades.length; i++){
        if (grades[i].value == "A"){
            gpa_value = 4.00;
        }
        else if (grades[i].value == "A-"){
            gpa_value = 3.7;
        }
        else if (grades[i].value == "B+"){
            gpa_value = 3.3;
        }
        else if (grades[i].value == "B"){
            gpa_value = 3.0;
        }
        else if (grades[i].value == "B-"){
            gpa_value = 2.7;
        }
        else if (grades[i].value == "C+"){
            gpa_value = 2.3;
        }
        else if (grades[i].value == "C"){
            gpa_value = 2.0;
        }
        else if (grades[i].value == "C-"){
            gpa_value = 1.7;
        }
        else if (grades[i].value == "D+"){
            gpa_value = 1.3;
        }
        else if (grades[i].value == "D"){
            gpa_value = 1.0;
        }
        else if (grades[i].value == "E"){
            gpa_value = 0;
        }
        console.log(gpa_value);
        gpa_array.push(gpa_value);
        console.log(gpa_array);
    }
    for (var i=0; i<credits.length; i++){
        credits_array.push(parseInt(credits[i].value));
        console.log(credits_array);
        total_credits = total_credits + parseInt(credits[i].value);
    }
    console.log(total_credits);
    console.log(gpa_array.length);
    console.log(credits_array.length);

    for (var i=0; i<gpa_array.length; i++){
        credits_to_gpa[i] = gpa_array[i] * credits_array[i];
    }
    console.log(credits_to_gpa);
    var total_crdts_to_gpa = 0;
    for (var i=0; i<credits_to_gpa.length; i++){
        total_crdts_to_gpa = total_crdts_to_gpa + credits_to_gpa[i];
    }

    var gpa = total_crdts_to_gpa / total_credits;
    console.log(gpa);
    var gpa_rounded = gpa.toFixed(2);
    console.log(gpa_rounded);
    document.getElementById("answer").value = gpa_rounded;
}