<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
    <style>
        body{
            background-color: white;
            background-image: url(bg3.jpg);
            background-size: 1700px;
            width: 200px;height: 200px;
        }
        .container{
            width:100%;
            height: 900px;

        }
        .cont{
            width:95%;
            height: 380px;

            padding: 10px;
            margin:20px;
            display: flex;
        }

        .int{
            padding:10px;
            margin-left: 20px;
            height: 30px;


        }
        select{
            padding: 10px;
            border: none;
            color:black;
            margin-left: 90px;
            background-color:white;
            width:320px;
            margin-right:20px;
            margin-top:280px;
            font-weight: bold;
            border-radius: 5px;
            border:2px solid black;
            height: 50px;
        }
        input[type=date]{
            padding: 10px;
            color: black;
            background-color: white;
            width: 220px;
            border:2px solid black;
            margin-right: 20px;
            margin-top:280px;
            margin-left: 90px;
            border-radius: 5px;
            font-weight: bold;
            height: 28px;
        }
        #btn{
            background-color: white;
            color:black;
            padding:8px;
            border-radius: 6px;
            width: 150px;
            font-size: 22px;
            margin-top:61px;
            height:60px;
            margin-left:690px;
            align-items:center;
            font-weight: 50px;

        }
        #btn:hover{
            /*background-color: pink;*/
            /*color: blue;*/
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php //include 'slogin.php';?>
<div class="container">
    <form action="" method="post">
        <div class="cont">
            <div class="int">

                <select name="dep" id="department">
                    <option disabled selected>Select The Department</option>
                    <option value="cse" id="CSE">COMPUTER SCIENCE AND ENGINEERING</option>
                    <option value="ee" id="EE">ELECTRICAL AND ELECTRONICS ENGINEERING</option>
                    <option value="mc" id="MC">MECHANICAL ENGINEERING</option>
                    <option value="sc" id="BC">BACHELOR'S OF SCIENCE</option>
                    <option value="po" id="P">POLYTECHNIC</option>
                    <option value="bca" id="BCA">BASIC COMPUTER SCIENCE APPLICATION</option>
                    <option value="mca" id="MCA">MASTER'S IN COMPUTER SCIENCE APPLICATION</option>


                </select>
            </div>
            <div class="int">

                <select name="dep" id="teachers">
                    <option disabled selected>Select The Teacher</option>
                    <option class="teacher cse" value="Mr.Ahmed Hussain">Mr.Ahmed Hussain</option>
                    <option class="teacher cse" value="Dr. Rubina Pathak">Dr. Rubina Pathak</option>
                    <option class="teacher po" value="Ms. Ruchi Bansal">Ms. Ruchi Bansal</option>
                    <option class="teacher cse" value="Mr. Mandeep Singh">Mr. Mandeep Singh</option>
                    <option class="teacher ee" value="Mr. Sandeep Rathore"> Mr. Sandeep Rathore</option>
                    <option class="teacher ee" value="Mr. Neeraj Gupta">Mr. Neeraj Gupta</option>
                    <option class="teacher mca" value="Mr. Ronit Raj"> Mr. Ronit </option>
                    <option class="teacher mca" value=" Mr. Anand Singh Jalal"> Mr. Anand Singh Jalal </option>
                    <option class="teacher ee" value="Mr. Umesh Bhatt"> Mr. Umesh Bhatt </option>
                    <option class="teacher bca" value="Dr. Sachin">Dr. Sachin </option>
                    <option class="teacher sc" value="Mr. Kiran"> Mr.Kiran </option>
                    <option class="teacher po" value="Mr. Suresh Kumar Roy"> Mr. Suresh Kumar Roy  </option>
                    <option class="teacher ee" value=" Mr. Anupam Bhansali"> Mr. Anupam Bhansali </option>
                    <option class="teacher sc" value=" Mr. Rakesh Raheja"> Mr. Rakesh Raheja </option>
                    <option class="teacher ee" value=" Ms. Anjani Raj"> Ms. Anjani Raj </option>
                    <option class="teacher bca" value="Ms.Ruchi Gupta"> Ms.Ruchi Gupta </option>





                </select>
            </div>
            <div class="int">

                <input type="date" placeholder="Select the Date">
            </div>



        </div>
        <button id="btn">BOOK</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $('#department').change(function(){
        $('.teacher').hide();
        $('.'+$(this).val()).show();
    });

</script>
<?php
include_once 'index.html';
?>
</body>
</html>