<?php
// Save codes
if($_POST['csas-style'] && $_POST['csas-script']) {
    update_option("csas-style", $_POST['csas-style']);
    update_option("csas-script", wp_unslash($_POST['csas-script']));

    echo "<div class='notice notice-success'><p>Your changes saved successfuly !</p></div>";
}

// Get codes
$csasStyle = get_option("csas-style", '/* There is nothing here */');
$csasScript = get_option("csas-script", '// There is nothing here');
?>

<h1>Custom Script & Style</h1>
<form method="POST" action="">
    <table class="form-table">
        <tbody>
            <tr>
                <th><label for="csas-style">Custom Style:</label></th>
                <td>
                    <textarea rows="10" class="large-text code" name="csas-style" id="csas-style"><?= $csasStyle ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="csas-script">Custom Script:</label></th>
                <td>
                    <textarea rows="10" class="large-text code" name="csas-script" id="csas-script"><?= $csasScript ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Save Changes" class="button button-primary">
</form>