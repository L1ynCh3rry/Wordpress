     

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/poper.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js" type="text/javascript"></script>
        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $(function () {
                                                        $(".form-contact").validate({
                                                            highlight: function (element) {
                                                                $(element).closest('.form-group').addClass("has-danger");
                                                                $(element).addClass("form-control-danger");
                                                            },
                                                            unhighlight: function (element) {
                                                                $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                                                                $(element).removeClass('form-control-danger').addClass('form-control-success');
                                                            },
                                                            rules: {
                                                                W_name: {
                                                                    required: true,
                                                                    rangelength: [3, 255]
                                                                },
                                                                W_email: {
                                                                    required: true,
                                                                    rangelength: [5, 255],
                                                                    email: true
                                                                },
                                                                W_message: {
                                                                    required: true,
                                                                    rangelength: [10, 255]
                                                                }

                                                            },
                                                            messages: {
                                                                W_name: {
                                                                    required: "The *Name field is required!",
                                                                    rangelength: "The *Name must be between 3 and 255 characters!"
                                                                },
                                                                W_email: {
                                                                    required: "The *Email field is required!",
                                                                    rangelength: "The *Email must be between 5 and 255 characters!",
                                                                    email: "Please enter a valid email addres!"
                                                                },
                                                                W_message: {
                                                                    required: "The *Message field is required!",
                                                                    rangelength: "The *Message must be between 10 and 255 characters!",
                                                                    email: "Please enter a valid message!"
                                                                }
                                                            },
                                                            errorElement: 'p',
                                                            errorPlacement: function (error, element) {
                                                                error.appendTo($(element).closest('.form-group').find('.error'));
                                                            }

                                                        });
                                                    });
                                                });
                                                //Form Validation
        </script>
    </body>

</html>