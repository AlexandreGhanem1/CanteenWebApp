<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <script type="text/javascript" src="main.js"></script>
    <title>main user</title>
</head>

<style>
    .containermenu {
    height: 1750px;
    width: 600px;
    background-color: #ededed;
    padding: 16px;
    position: absolute;
    top: 135%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    text-align: center;
    border: 1px solid #666;
    border-radius: 16px;
}
</style>

<body>
    <!-- Top navigation -->
    <div class="topnav">

        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="mainuser.php" class="active">Menu</a>
        </div>

        <!-- Left-aligned links (default) -->
        <a href="login.php">Log Off</a>


        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="profile.php">Profile</a>
            <a href="history.php">History</a>
        </div>

    </div>
    <div class="containermenu">
        <h1>Menu</h1>
        <h2>Which week would you like to have access?</h2>
        <h3>Keep in mind that the week that you can currently reserve is week 1</h3>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Week</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Week 1</a>
                <a href="#">Week 2</a>
                <a href="#">Week 3</a>
            </div>
            <h2>Monday</h2>
            <table class="content-table">
                <tbody>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioMonday">
                            <span class="checkmark"></span>
                          </label>Kafta
                            <td>Kafta with potatoes and tomato</td>
                        </td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioMonday">
                            <span class="checkmark"></span>
                          </label>Sushi
                        </td>
                        <td>You can still dream</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioMonday">
                            <span class="checkmark"></span>
                          </label>Steak
                        </td>
                        <td>Steak with fries and a green salade</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioMonday">
                            <span class="checkmark"></span>
                          </label>None
                        </td>
                        <td>A beautiful nothing for the day</td>
                    </tr>

                </tbody>
            </table>
            <h2>Tuesday</h2>
            <table class="content-table">
                <tbody>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioTuesday">
                            <span class="checkmark"></span>
                          </label>Kafta
                            <td>Kafta with potatoes and tomato</td>
                        </td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioTuesday">
                            <span class="checkmark"></span>
                          </label>Sushi
                        </td>
                        <td>You can still dream</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioTuesday">
                            <span class="checkmark"></span>
                          </label>Steak
                        </td>
                        <td>Steak with fries and a green salade</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioTuesday">
                            <span class="checkmark"></span>
                          </label>None
                        </td>
                        <td>A beautiful nothing for the day</td>
                    </tr>
                </tbody>
            </table>
            <h2>Wednesday</h2>
            <table class="content-table">
                <tbody>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioWednesday">
                            <span class="checkmark"></span>
                          </label>Kafta
                            <td>Kafta with potatoes and tomato</td>
                        </td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioWednesday">
                            <span class="checkmark"></span>
                          </label>Sushi
                        </td>
                        <td>You can still dream</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioWednesday">
                            <span class="checkmark"></span>
                          </label>Steak
                        </td>
                        <td>Steak with fries and a green salade</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioWednesday">
                            <span class="checkmark"></span>
                          </label>None
                        </td>
                        <td>A beautiful nothing for the day</td>
                    </tr>
                </tbody>
            </table>
            <h2>Thursday</h2>
            <table class="content-table">
                <tbody>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioThursday">
                            <span class="checkmark"></span>
                          </label>Kafta
                            <td>Kafta with potatoes and tomato</td>
                        </td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioThursday">
                            <span class="checkmark"></span>
                          </label>Sushi
                        </td>
                        <td>You can still dream</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioThursday">
                            <span class="checkmark"></span>
                          </label>Steak
                        </td>
                        <td>Steak with fries and a green salade</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioThursday">
                            <span class="checkmark"></span>
                          </label>None
                        </td>
                        <td>A beautiful nothing for the day</td>
                    </tr>
                </tbody>
            </table>
            <h2>Friday</h2>
            <table class="content-table">
                <tbody>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioFriday">
                            <span class="checkmark"></span>
                          </label>Kafta
                            <td>Kafta with potatoes and tomato</td>
                        </td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioFriday">
                            <span class="checkmark"></span>
                          </label>Sushi
                        </td>
                        <td>You can still dream</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioFriday">
                            <span class="checkmark"></span>
                          </label>Steak
                        </td>
                        <td>Steak with fries and a green salade</td>
                    </tr>
                    <tr>
                        <td><label>
                            <input type="radio" checked="checked" name="radioFriday">
                            <span class="checkmark"></span>
                          </label>None
                        </td>
                        <td>A beautiful nothing for the day</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="dropbtn">Save Menu</button>
    </div>
</body>
</html>