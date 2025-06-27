<?php
Page::open();
Row::open();
Col::open();
Card::open(["title" => "Student Exam Report"]);
?>
<div style="display: flex;justify-content:center; background-color:wheat;">
    <div>
        <b>Search By Id:</b>
    </div>
   
    <input type="text" id="search">
    <input style="background-color:gray;color:blue;" type="button" value="Search" onclick="go(search.value)">

</div>

<?php

//Html::link(["class"=>"btn btn-success", "route"=>"academystudent/create", "text"=>"Create AcademyStudent"]);
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
echo AcademyResult::html_student_reports($page, 10);
Card::close();
Col::close();
Row::close();
Page::close();
?>
<script>

    function go(id) {
        // alert(id);
        location = `/My_School_Project/School_Management_Project/academyresult/report/${id}`;
    }
</script>