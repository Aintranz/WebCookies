$(document).ready(function() {

    LoadData();
    user_data();

    $(document).on('click','#BuyCart',function(event) {
        var num = $(this).attr('value');

        $.ajax({
            type: "POST",
            url: "./backend/SQL/Search.php",
            data: {
                "search": true,
                num:num,
            },
            success:function(response) {
                
                $('#BuyItem').attr('value',response[0]['id']);
                $('#exampleModalLabel').text(response[0]['title'])
                $('#desc').text(response[0]['description'])
                $('#price').text(response[0]['prize']);
            }
        })
    })
    
   $('#BuyItem').click(function(e) {
        e.preventDefault();

        const name = $('#fullname').val();
        const email = $('#email').val();
        const quan = $('#quan').val();
        const title = $('#exampleModalLabel').text();

        if(name != "" && email != "" && quan != "" && title != ""){
            $.ajax({
                type: "POST",
                url: "./backend/SQL/Search.php",
                data: {
                    "insert": true,
                    name:name,
                    email:email,
                    quan:quan,
                    title:title,
                },
                success:function(response) {
                    if(response == 1) {
                        document.getElementById('reset').reset();
                        // alertify.success('Feedback Sent!');
                        alert("Ordered Completed")

                        setTimeout(() => {
                            window.location.reload();
                        },1500);
                        

                    }
                    else{
                        // alertify.error('Something Went Wrong');
                        alert("Wrong")
                    }
                }
            })
        }
        else{
            alert("Please Fill The Fields")
        }
   })

    function LoadData(){
        console.log("1233")
        $.ajax({
            type: "POST",
            url: "./backend/SQL/LoadData.php",
            success:function(response){
                // console.log(response)
                if (response == 2) {
                    
                }
                else{
                    $.each(response, function(index, val) {
                        const file = "./assets/image/"+''+val['image'];
                        $('#Datacart').append('<div class="col-lg-4 mb-5">'+
                            '<div class="card border-0 p-2">'+
                            '<img src='+file+' class="card-img mb-3" height="250" alt="">'+
                            '<div class="title">'+
                            '<h4>'+val['title']+'</h4>'+
                            '</div>'+
                            '<div class="subtitle">'+
                            '<p class="text-secondary">'+val['description']+'</p>'+
                            '</div>'+
                            '<button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal" value='+val['id']+' id="BuyCart">Buy</button>'+
                            '</div>'+
                            '</div>'
                        )
                    });
                }		
            }
        });
    }



   


    function user_data(){
        // console.log("12");
        $.ajax({
            type: "POST",
            url: "./backend/SQL/UserData.php",
            success:function(response){
        
                $('td').remove();
                if (response == 2) {
                    
                }
                else{
                    $.each(response, function(index, val) {
                        $('#table_data').append('<tr>'+
                                    '<td class="text-dark"> <span id="fk_id">'+val['name']+'</span></td>'+
                                    '<td class="text-dark">'+val['title']+'</td>'+
                                    '<td class="text-dark">'+val['quan']+'</td>'+
                                    '<td class="text-dark">'+val['email']+'</td>'+
                                '</tr>'
                        );
                    });
                }		
            }
        });
    }

})