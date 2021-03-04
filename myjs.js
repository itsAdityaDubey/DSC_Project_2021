$(document).ready(function () {
    if ($(window).width() > 991){
    $('.navbar-light .d-menu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
        });
        }
    });
    $(document).ready(function(){
        $("#changepass").click(function(event){
            let pass = document.getElementById('New_Password').value;
            let oldpass = document.getElementById('Old_Password').value;
            let repass = document.getElementById('Re_Password').value;
            if( pass != repass){
                document.getElementById('editpasscheck').innerHTML = "Please Recheck Password.";
                event.preventDefault();
            }
            if( pass == oldpass){
                document.getElementById('editpasscheck').innerHTML = "Please Different Password.";
                event.preventDefault();
            }
        });
    });