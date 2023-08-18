<?php
function addProject($pname, $featurearray, $Specificationarray){
    $conn = mysqli_connect('localhost', 'root', '', 'finalb');
    $sql = "INSERT INTO projects VALUES('', '$pname', '$featurearray', '$Specificationarray')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $Featurelist = $_POST['selectedFeature']; // Corrected: $_POST['selectedFeature']
    $SpecificationList = $_POST['selectedSpecification']; // Corrected: $_POST['selectedSpecification']
    
    $featurearray = "";
    $Specificationarray = "";
    
    foreach ($Featurelist as $feature) {
        $featurearray .= $feature . ",";
    }
    foreach ($SpecificationList as $Specification) {
        $Specificationarray .= $Specification . ",";
    }

    $result = addProject($pname, $featurearray, $Specificationarray);
    
    if ($result) {
        header('Location: addproject.php?message=success');
        exit;
    } else {
        header('Location: addproject.php?message=failed');
        exit;
    }
}
?>
