<?php
    include_once "headeradmin.php";
?>
<style>
.containeraddmeal {
    height: 450px;
    width: 700px;
    background-color: #ededed;
    padding: 16px;
    position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    text-align: center;
    border: 1px solid #666;
    border-radius: 16px;
}
</style>
    <h1>Meal admin</h1>
    <h2>Add a meal here:</h2>
    <div class="containeraddmeal">
        <h1>Add a meal here:</h1>
        <table class="content-table">
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>
                        <div>
                            <input type="text" placeholder="Enter the meal name" name="uname" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <div>
                            <input type="text" placeholder="Enter the description" name="uname" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <form action="/action_page.php">
                            <input type="file" id="myFile" name="filename">
                            <input type="submit">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Time before lock-in</td>
                    <td>
                        <div>
                            <input type="number" id="tentacles" name="tentacles" min="0" max="170">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="dropbtn">Save Meal</button>
</body>
</html>