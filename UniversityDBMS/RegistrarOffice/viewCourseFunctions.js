
$(document).ready(function()
{
    //This function changes the items in the semester dropdown box based on the year and ProfID. This function only runs if there is a change in the year dropdown box.
    $(".Year").change(function()
    {
        //Declare and obtain year value based on what user has selected on the year dropdown box
        var year = $(this).val();
        //Use Ajax to make a request to semesterCourse.php. This request will return the dropdown values for the semester that corresponds with the year and professor ID
        $.ajax
        ({
            url: "semesterCourse.php",
            method: "POST",
            data:{year:year},
            success:function(data)
            {
                //Update the semester dropdownbox 
                $(".Semester").html(data);
                //Reset the course dropdownbox to select course
               // $(".Course").prop('selectedIndex',0);
            }
                
        });
    });




});