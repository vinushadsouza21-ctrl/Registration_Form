<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'fullname' => htmlspecialchars($_POST['fullname']),
        'email' => htmlspecialchars($_POST['email']),
        'phone' => htmlspecialchars($_POST['phone']),
        'dob' => htmlspecialchars($_POST['dob']),
        'nationality' => htmlspecialchars($_POST['nationality']),
        'address' => htmlspecialchars($_POST['address']),
        'state' => htmlspecialchars($_POST['state']),
        'gender' => htmlspecialchars($_POST['gender']),
        'course' => htmlspecialchars($_POST['course'])
    ];

    // Convert array to query string for redirect
    $query = http_build_query($data);

    header("Location: success.php?$query");
    exit;
} else {
    echo "<p style='color:red;'>Invalid submission.</p>";
}
?>
