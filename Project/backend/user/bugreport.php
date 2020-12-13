<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bug_button'])) {
    $postData = [
        'report_description' => $_POST['report_description'],
    ];

    if (empty($postData['report_description'])) {
        echo "<script>alert('Hiányzó adat!');</script>";
    } else if (strlen($postData['report_description']) > 250) {
        echo "<script>alert('A jelentés max 240 karakter lehet!');</script>";
    } else if (!UserBugreport($_SESSION['uid'], $postData['report_description'], date('l jS \of F Y h:i:s A'))) {
        echo "<script>alert('Sikertelen jelentés!');</script>";
    }

}
if (IsUserLoggedIn() && isset($_SESSION['permission']) && $_SESSION['permission'] > 0) {
    $query = "SELECT * FROM bugreports";
    require_once 'backend/dbFunctions.php';
    $brlist = getList($query);
}
?>
<div class="reportContainer">
<form method="post" class="form_report">
    <div class="form_report_row">
        <label for="reportdescription"><b>Észlelt Hiba:</b></label>
        <input type="text" name="report_description" placeholder="Mi a hiba?" class="reportElements">
    </div>
    <div class="form_report_row">
        <input type="submit" name="bug_button" value="Jelentés küldése" class="reportButton">
    </div>
</form>
</div>
<?php if (IsUserLoggedIn() && $_SESSION['permission'] > 0): ?>
    <div id="bugreports-container">
        <div id="bugreports-header">
            <span class="br-header-element">User</span> <span class="br-header-element">Message</span> <span class="br-header-element">Date</span>
        </div>
        <?php foreach ($brlist as $br): ?>
            <div class="bugreport-row">
                <span class="br-cell-user"><?=$br['uid']?></span>
                <span class="br-cell-report"><?=$br['report']?></span>
                <span class="br-cell-date"><?=$br['date']?></span>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
