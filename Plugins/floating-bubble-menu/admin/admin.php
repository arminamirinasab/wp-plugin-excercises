<?php
global $title;

if (isset($_POST['bubble-menu-item1'])) {
    // Form data
    $bubbleDatas = [
        "bubble-menu-item1" => wp_unslash($_POST['bubble-menu-item1']),
        "bubble-menu-item2" => wp_unslash($_POST['bubble-menu-item2']),
        "bubble-menu-item3" => wp_unslash($_POST['bubble-menu-item3']),
        "bubble-menu-item4" => wp_unslash($_POST['bubble-menu-item4']),

        "bubble-menu-color1" => sanitize_hex_color($_POST['bubble-menu-color1']),
        "bubble-menu-color2" => sanitize_hex_color($_POST['bubble-menu-color2']),
        "bubble-menu-color3" => sanitize_hex_color($_POST['bubble-menu-color3']),
        "bubble-menu-color4" => sanitize_hex_color($_POST['bubble-menu-color4']),

        "bubble-menu-url1" => $_POST['bubble-menu-url1'],
        "bubble-menu-url2" => $_POST['bubble-menu-url2'],
        "bubble-menu-url3" => $_POST['bubble-menu-url3'],
        "bubble-menu-url4" => $_POST['bubble-menu-url4'],
    ];
    // Save settings
    update_option("bubble-datas", $bubbleDatas);
    echo "<div class='notice notice-success'><p>Your options saved successfuly !</p></div>";
}

$bubbleValues = get_option('bubble-datas');
?>

<h1><?= $title ?></h1>
<form method="POST" action="">
    <table class="form-table">
        <tbody>
            <tr>
                <th>
                    <label for="bubble-menu-item1">Bubble Menu Item Icon: </label>
                </th>
                <td><textarea placeholder="Write your SVG here ..." id="bubble-menu-item1" name="bubble-menu-item1" class="regular-text code" rows="10" type="text"><?= $bubbleValues['bubble-menu-item1'] ?></textarea></td>
            </tr>
            <tr>
                <th><label for="bubble-menu-url1">Bubble Menu Item URL: </label></th>
                <td><input value="<?= $bubbleValues['bubble-menu-url1'] ?>" placeholder="https://example.com/" class="regular-text" id="bubble-menu-url1" name="bubble-menu-url1" type="text"></td>
            </tr>
            <tr style="border-bottom: solid  1px #AAA;">
                <th>
                    <label for="bubble-menu-color1">Bubble Menu Item Color: </label>
                </th>
                <td><input value="<?= $bubbleValues['bubble-menu-color1'] ?>" id="bubble-menu-color1" name="bubble-menu-color1" type="color"></td>

            </tr>
            <tr>
                <th>
                    <br>
                    <label for="bubble-menu-item2">Bubble Menu Item Icon: </label>
                </th>
                <td><br><textarea placeholder="Write your SVG here ..." id="bubble-menu-item2" name="bubble-menu-item2" class="regular-text code" rows="10" type="text"><?= $bubbleValues['bubble-menu-item2'] ?></textarea></td>
            </tr>
            <tr>
                <th><label for="bubble-menu-url2">Bubble Menu Item URL: </label></th>
                <td><input value="<?= $bubbleValues['bubble-menu-url2'] ?>" placeholder="https://example.com/" class="regular-text" id="bubble-menu-url2" name="bubble-menu-url2" type="text"></td>
            </tr>
            <tr style="border-bottom: solid  1px #AAA;">
                <th>

                    <label for="bubble-menu-color2">Bubble Menu Item Color: </label>
                </th>
                <td><input value="<?= $bubbleValues['bubble-menu-color2'] ?>" id="bubble-menu-color2" name="bubble-menu-color2" type="color"></td>
            </tr>

            <tr>
                <th>
                    <br>
                    <label for="bubble-menu-item3">Bubble Menu Item Icon: </label>
                </th>
                <td><br><textarea placeholder="Write your SVG here ..." id="bubble-menu-item3" name="bubble-menu-item3" class="regular-text code" rows="10" type="text"><?= $bubbleValues['bubble-menu-item3'] ?></textarea></td>
            </tr>
            <tr>
                <th><label for="bubble-menu-url3">Bubble Menu Item URL: </label></th>
                <td><input value="<?= $bubbleValues['bubble-menu-url3'] ?>" placeholder="https://example.com/" class="regular-text" id="bubble-menu-url3" name="bubble-menu-url3" type="text"></td>
            </tr>
            <tr style="border-bottom: solid  1px #AAA;">
                <th>
                    <label for="bubble-menu-color3">Bubble Menu Item Color: </label>
                </th>
                <td><input value="<?= $bubbleValues['bubble-menu-color3'] ?>" id="bubble-menu-color3" name="bubble-menu-color3" type="color"></td>
            </tr>

            <tr>
                <th>
                    <br>
                    <label for="bubble-menu-item4">Bubble Menu Item Icon: </label>
                </th>
                <td><br><textarea placeholder="Write your SVG here ..." id="bubble-menu-item4" name="bubble-menu-item4" class="regular-text code" rows="10" type="text"><?= $bubbleValues['bubble-menu-item4'] ?></textarea></td>
            </tr>
            <tr>
                <th><label for="bubble-menu-url4">Bubble Menu Item URL: </label></th>
                <td><input value="<?= $bubbleValues['bubble-menu-url4'] ?>" placeholder="https://example.com/" class="regular-text" id="bubble-menu-url4" name="bubble-menu-url4" type="text"></td>
            </tr>
            <tr>
                <th>
                    <label for="bubble-menu-color4">Bubble Menu Item Color: </label>
                </th>
                <td><input value="<?= $bubbleValues['bubble-menu-color4'] ?>" id="bubble-menu-color4" name="bubble-menu-color4" type="color"></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Save Changes" class="button button-primary">
</form>