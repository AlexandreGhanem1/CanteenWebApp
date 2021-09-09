<?php
    include_once "header.php";
?>
<style>
    body {
        background-color: #04246a;
    }

    .containerhistory {
    height: 450px;
    width: 1000px;
    background-color: #ededed;
    position: absolute;
    padding: 16px;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    border-radius: 16px;
}
    
    .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        background-color: #f1f1f1;
        min-width: 600px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    
    .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }
    
    .content-table th,
    .content-table td {
        padding: 12px 15px;
    }
    
    .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }
    
    .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    
    .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879
    }
    
    .history-title {
        color: #ffffff;
    }
</style>


    <div class="containerhistory">
        <h1>History</h1>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Week</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">Week 1</a>
                <a href="#">Week 2</a>
                <a href="#">Week 3</a>
            </div>
        </div>

        <table class="content-table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Meal</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>Kafta</td>
                    <td>Kafta with rice</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>None</td>
                    <td>A beautiful nothing</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Steak and fries</td>
                    <td>Steak, fries and a salad</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>None</td>
                    <td>A beautiful nothing</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>None</td>
                    <td>A beautiful nothing</td>
                </tr>
            </tbody>
        </table>


    </div>
</body>

</html>