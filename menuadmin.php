<?php
    include_once "headeradmin.php";
?>

<style>
.container1 {
    height: 300px;
    width: 600px;
    background-color: #ededed;
    padding: 16px;
    position: absolute;
    top: 35%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    text-align: center;
    border: 1px solid #666;
    border-radius: 16px;
}

.container2 {
    height: 1500px;
    width: 600px;
    background-color: #ededed;
    padding: 16px;
    position: absolute;
    top: 170%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    text-align: center;
    border: 1px solid #666;
    border-radius: 16px;
}
</style>

    <div class="container1">
        <h1>Add a week here:</h1>
        From Monday:
        <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')">

        <!-- Not using onfocus="(this.type='date')" -->
        To Friday:
        <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')">
        <button class="dropbtn">Save Week</button>
    </div>
    <div class="container2">
        <h1>Add a menu here:</h1>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Week</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Week 1</a>
                <a href="#">Week 2</a>
                <a href="#">Week 3</a>
            </div>

            <h2>Monday</h2>
            <input list="meal">
            <table class="content-table">
                <tbody>
                    <tr>
                        <td>Meal 1 is:</td>
                        <td>Kafta</td>

                    </tr>
                    <tr>
                        <td>Meal 2 is:</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Meal 3 is:</td>
                        <td>Steak and fries</td>

                </tbody>
            </table>
            <datalist id="meal">
            <option value="Sushi">
            <option value="Burger">
            <option value="Kafta">
            <option value="None">
            <option value="Fried Chicken">
</datalist>
            <h2>Tuesday</h2>
            <input list="meal">
            <table class="content-table">
                <tbody>
                    <tr>
                        <td>Meal 1 is:</td>
                        <td>Kafta</td>

                    </tr>
                    <tr>
                        <td>Meal 2 is:</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Meal 3 is:</td>
                        <td>Steak and fries</td>

                </tbody>
            </table>

            <h2>Wednesday</h2>
            <input list="meal">
            <table class="content-table">
                <tbody>
                    <tr>
                        <td>Meal 1 is:</td>
                        <td>Kafta</td>

                    </tr>
                    <tr>
                        <td>Meal 2 is:</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Meal 3 is:</td>
                        <td>Steak and fries</td>

                </tbody>
            </table>
            <h2>Thursday</h2>
            <input list="meal">
            <table class="content-table">
                <tbody>
                    <tr>
                        <td>Meal 1 is:</td>
                        <td>Kafta</td>

                    </tr>
                    <tr>
                        <td>Meal 2 is:</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Meal 3 is:</td>
                        <td>Steak and fries</td>

                </tbody>
            </table>
            <h2>Friday</h2>
            <input list="meal">
            <table class="content-table">
                <tbody>
                    <tr>
                        <td>Meal 1 is:</td>
                        <td>Kafta</td>

                    </tr>
                    <tr>
                        <td>Meal 2 is:</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Meal 3 is:</td>
                        <td>Steak and fries</td>

                </tbody>
            </table>
        </div>
        <button class="dropbtn">Save Menu</button>
    </div>
</body>

</html>