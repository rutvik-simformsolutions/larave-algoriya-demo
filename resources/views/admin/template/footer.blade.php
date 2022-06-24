<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('theme/dist/js/adminlte.min.js') }}"></script>

{{-- datatable js --}}
<script src="{{ asset('theme/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('theme/dist/js/sweetalert.js') }}"></script>
<script src="{{ asset('theme/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
{{-- <script src="{{ asset('js/bootstrap.js') }}"></script> --}}
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<script>


    $(".flash_alert").hide().show(500, function () {
        setTimeout(() => {
            $('.flash_alert').hide('slow')
        }, 4000);
    });

    function are_u_sure() {
        return new Promise((resolve, reject) => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                resolve(result);
            })
        });
    }


    function salert(type, item = "") {
        let meg_successed;
        let msg_error;
        if (type == 'success') {
            msg_successed = item + " Successfully.";
            msg_error = item + " Failed.";
        } else {
            msg_successed = " Success";
            msg_error = " Failed";
        }

        if (type == 'success') {
            Swal.fire(
                'Ohh Yes!',
                msg_successed,
                'success'
            )
        } else {
            Swal.fire(
                'Opps!',
                msg_error,
                'error'
            )
        }
    }

</script>

<script>
    $(document).ready(function () {
        $("#searchform").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: "{{ route('algoriya.search') }}",
                data: {
                    query:$("#querystring").val()
                },
                success: function (response) {
                    $('#exampleModalCenter').show();
                    $('.mailcontainer').html(response);
                }
            });
        });
    });
</script>
