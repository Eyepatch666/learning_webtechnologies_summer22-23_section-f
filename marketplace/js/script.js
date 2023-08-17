function fetchAndDisplayCourse() {
    var courseName = document.getElementById("course_name").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../controller/valsrc.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("results").innerHTML = xhr.responseText;
        }
    };

    xhr.send("course_name=" + courseName);
    document.getElementById("results").classList.remove("hidden");
}
