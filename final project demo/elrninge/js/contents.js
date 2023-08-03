function createTableRows(data) {
    var thead = document.getElementById("theadID");
    var tableBody = document.querySelector("#tbodyID");

    tableBody.innerHTML = "";
    for (var i = 0; i < data.length; i++) {
        var row = tableBody.insertRow();
        row.insertCell().textContent = data[i].cname;
        row.insertCell().textContent = data[i].category;
        row.insertCell().textContent = data[i].instructor_id;
        row.insertCell().textContent = data[i].cdescription;

        var coverCell = row.insertCell();
        var coverImg = document.createElement("img");
        coverImg.height = 100;
        coverImg.width = 100;
        coverImg.src = "../" + data[i].cover;
        coverImg.alt = "Course Cover";

        coverCell.appendChild(coverImg);
    }
}



function searchCourses() {
    const searchQuery = document.getElementById('searchQuery').value;
    console.log(searchQuery);

    const xhr = new XMLHttpRequest();

    xhr.open('GET', `../controller/searchcourses.php?search_query=${encodeURIComponent(searchQuery)}`, true);
    xhr.send();
    xhr.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            const response = this.responseText;
            const courseTable = document.getElementById('courseTable');
            // courseTable.innerHTML = response;
            // console.log(response);
            const jsonData = JSON.parse(response);

            createTableRows(jsonData);
        }

    };
}


function searchCourses2() {
    const searchQuery = document.getElementById('searchQuery').value;
    console.log(searchQuery);

    if (searchQuery.trim() === '') {
        // var thead = document.getElementById("theadID");
        // thead.hidden = true;
        var tableBody = document.querySelector("#tbodyID");
        tableBody.innerHTML = "";
        tableBody.hidden = false;
        return;
    }


    const xhr = new XMLHttpRequest();

    
    xhr.open('GET', `../controller/searchcourses.php?search_query=${encodeURIComponent(searchQuery)}`, true);

    xhr.send();
    xhr.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            const response = this.responseText;
            const courseTable = document.getElementById('courseTable');
            // courseTable.innerHTML = response;
            // console.log(response);
            const jsonData = JSON.parse(response);

            createTableRows(jsonData);
        }

    };
}