<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="{{asset('backend/js/sweetalert2@11.js')}}"></script>

<script>
$('.delete').click(function() {
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

            var id = $(this).attr('id');
            var url = 'product/' + id;

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    "_method": 'DELETE',
                },
                success: function(data) {
                    window.location.reload();
                }
            })
        }
    })
});
</script>

<script>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

@if(Session::has('success'))
Toast.fire({
    icon: 'success',
    title: "{{Session::get('success')}}"
})
@endif
</script>



<!-- // await Toast.fire({
// icon: 'error',
// title: 'Error'
// })
// await Toast.fire({
// icon: 'warning',
// title: 'Warning'
// })
// await Toast.fire({
// icon: 'info',
// title: 'Info'
// })
// await Toast.fire({
// icon: 'question',
// title: 'Question'
// }) -->