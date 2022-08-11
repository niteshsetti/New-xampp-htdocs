const dfa2=(parameter_config)=>{
    alert(parameter_config);
 Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
            url:"../backend/deletea.php",
            method:"post",
            async:false,
            data:{
                "dels":parameter_config
            },
            success:function(data)
            {
                console.log(data);
                if( data === "Success")
                {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                }
            }
      });
    }
  })
}

const dfa3=(parameter_config)=>{
 Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
            url:"../backend/deletea.php",
            method:"post",
            async:false,
            data:{
                "dels1":parameter_config
            },
            success:function(data)
            {
                console.log(data);
                if( data === "Success")
                {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                }
            }
      });
    }
  })
}


const dfa4=(parameter_config)=>{
    Swal.fire({
       title: 'Are you sure?',
       text: "You won't be able to revert this!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
       if (result.isConfirmed) {
         $.ajax({
               url:"../backend/deletea.php",
               method:"post",
               async:false,
               data:{
                   "dels2":parameter_config
               },
               success:function(data)
               {
                   console.log(data);
                   if( data === "Success")
                   {
                       Swal.fire(
                           'Deleted!',
                           'Your file has been deleted.',
                           'success'
                         )
                   }
               }
         });
       }
     })
   }


   const dfa5=(parameter_config)=>{
    Swal.fire({
       title: 'Are you sure?',
       text: "You won't be able to revert this!",
       icon: 'warning',
       showCancelButton: true,
       confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
       confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
       if (result.isConfirmed) {
         $.ajax({
               url:"../backend/deletea.php",
               method:"post",
               async:false,
               data:{
                   "dels3":parameter_config
               },
               success:function(data)
               {
                   console.log(data);
                   if( data === "Success")
                   {
                       Swal.fire(
                           'Deleted!',
                           'Your file has been deleted.',
                           'success'
                         )
                   }
               }
         });
       }
     })
   }