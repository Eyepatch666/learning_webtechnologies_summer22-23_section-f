function ajax() {
  let feedback = document.getElementById('feedback').value;
  let xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controller/feedbackcheck.php', true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send('feedback=' + feedback);
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('td1').innerHTML = this.responseText;
      let feedback1 = document.getElementById('feedback');
      feedback1.style.display = "none";
      let submitButton = document.getElementById('submit');
      submitButton.style.display = "none";

    }
  };
}
