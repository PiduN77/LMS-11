function search() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("datasearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("datatable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for(i=0;i<tr.length;i++) {
        for(j=0;j<tr[i].getElementsByTagName("td").length;j++) {
            td = tr[i].getElementsByTagName("td")[j];
            if(td) {
                txtValue = td.textContent || td.innerText;
                if(txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    i++;
                    j=0;
                } 
                else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
function input(type, label, fk, fkn) {
    var res1 = document.createElement("input");
    var lab1 = document.createElement("label");
    lab1.innerHTML = label;
    lab1.classList.add("text-white");
    document.getElementById("add").insertBefore(lab1, document.getElementById("add").lastElementChild);
    if(type.includes("bigint unsigned") || type.includes("enum")) {
        res1 = document.createElement("select");
        res1.classList.add("d-block");
    }
    else if(type.includes("varchar(100)")) {
        res1.type = "file";
    }
    else if(type.includes("varchar")) {
        res1.type = "text";
        res1.setAttribute("placeholder", "Isi disini")
    }
    else if(type.includes("int")) {
        res1.type = "number";
        res1.value = 0;
        res1.setAttribute("min", 0);
        if(label=="rating") {
            res1.setAttribute("max", 5);
        }
        if(label=="qty" || label=="rating") {
            res1.setAttribute("min", 1);
            res1.value = 1;
        }
    }
    else if(type.includes("text")) {
        res1 = document.createElement("textarea");
        res1.setAttribute("placeholder", "Isi disini")
    }
    else if(type.includes("datetime")) {
        res1.type = "datetime-local";
        
    }
    res1.classList.add("form-control", "mb-2", "bg-white", "text-dark");
    res1.setAttribute("name", label);
    res1.required = true;
    document.getElementById("add").insertBefore(res1, document.getElementById("add").lastElementChild);
    if(type.includes("enum")) {
        var val = type.slice(5, -1).replaceAll("'", "").split(",");
        for(i=0;i<val.length;i++) {
            var opt = document.createElement("option");
            opt.value = val[i];
            opt.text = val[i];
            res1.appendChild(opt);
        }
    }
    else if(type.includes("bigint unsigned")) {
        for(let i=0;i<fk.length;i++) {
            var opt = document.createElement("option");
            opt.value = fk[i]["id"];
            opt.text = fk[i]["id"] + " - " + fk[i][fkn];
            res1.appendChild(opt);
        }
    }
    var res2 = res1.cloneNode(true);
    res2.disabled = true;
    res2.classList.remove("bg-white");
    var lab2 = lab1.cloneNode(true);
    document.getElementById("edit").insertBefore(lab2, document.getElementById("edit").lastElementChild);
    document.getElementById("edit").insertBefore(res2, document.getElementById("edit").lastElementChild);
}