/**
 * All Users page
 */

$( document ).ready(function() {
$('#user').click(function(){

    $.ajax({
        url:  'users.php',
        success: function(data){
           $('.app').html(data);
           all_user();
        },
    
    });

return false;
});

/**
 * Account Create page
 */
$('#create').click(function(){

    function app () {
        $.ajax({
            url:    'create.php',
            success: function(data){
                $('.app').html(data);
            }
        });
    }
    app();
    return false;
});

/**
 * Profile page
 */
$(document).on('submit', '#create_student', function(e){

    e.preventDefault();
            $.ajax({
                url:   'all-data/create.php',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Account Created Succeful',
                        showConfirmButton: false,
                        timer: 1500
                      });

                      $('#create_student')[0].reset()

                }
                });
});

function all_user(){
    $.ajax({
        url:  'all-data/users.php',
        success: function(data){
            $('#users-data').html(data);
        }
    });
    return false;
}
all_user();

$(document).on('click','.delete_btn', function(e){
    e.preventDefault();
    let id = $(this).attr('delete_id');
    Swal.fire({
        title: 'Are you sure?',
        text: "Remove Your Profile!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((d_data) => {
        if (d_data.isConfirmed) {
            $.ajax({
                url: 'all-data/delete.php',
                method: 'POST',
                data:{
                    d_id: id,
                },
                success: function(data){
                    all_user();
                    Swal.fire(
                        'Deleted!',
                        'Your Profile has been deleted.',
                        'success'
                      )
                }
            });
        }
      })
});

$(document).on('change', '#photos', function(e){
    e.preventDefault();
   let url = URL.createObjectURL(e.target.files[0]);
   $('#pre').attr('src', url);
 
});

// $(document).on('click', '.prof',function(e){
//     e.preventDefault();
    
//     $.ajax({
//         url: 'profile.php',
//         success: function(data){
//             $('.app').modal('show');
//         }
//     });


// });

$(document).on('click', '.prof', function(e){
    e.preventDefault();
    let id = $(this).attr('prof_id');
    $.ajax({
        url: 'all-data/profile.php',
        method: 'POST',
        data: {
            user_id: id,
        },
        success: function(data){    
            $('.app').html(data);
            $('#profiles').modal('show');
            all_user();
            alert(data);
        }
    });
});

});
