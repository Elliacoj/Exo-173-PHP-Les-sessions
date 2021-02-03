<?php
include 'header.php';
?>
<div id="container">
    <form action="" method="GET">
        <div>
            <label for="select">Choisissez une couleur</label>
            <select name="select" id="select" required>
                <option value="red">Rouge</option>
                <option value="blue">Bleu</option>
                <option value="yellow">Jaune</option>
                <option value="green">Vert</option>
                <option value="black">Noir</option>
            </select>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
    <div><a href="page2.php">Page2</a></div>
    <div><a href="page3.php">Page3</a></div>
    <div><a href="page4.php">Page4</a></div>

</div>

<?php
include 'footer.php';
