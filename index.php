<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
include_once 'php/connection.php';
include_once 'layout/header.php';
include_once 'layout/modals.php';
include_once 'php/functions.php';

if ($_SESSION['maged_sms']['auth']!='true' or !isset($_SESSION['maged_sms']['auth'])){
    ?>
    <script> location.replace("login.php"); </script>
    <?php
}
?>
<body class="fixed-sidebar no-skin-config full-height-layout">

    <div id="wrapper">
        <?php include_once 'layout/menu.php'?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php include_once 'layout/topbar.php'?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Inbox</h2>
                </div>
                <div class="col-lg-2">
                    <h2>
                        <button class="btn-rounded btn btn-success " type="button" data-toggle="modal" data-target="#send_mail"><i class="fa fa-send"> New message  </i></button>
                    </h2>
                </div>
            </div>
            <div class="fh-breadcrumb">
                <div class="fh-column">
                    <div class="full-height-scroll">
                        <ul class="list-group elements-list">
                            <li class="hidden list-group-item active selected">
                                <a data-toggle="tab" href="#tab-9999">
                                    <small class="pull-right text-muted"></small>
                                    <strong></strong>
                                    <div class="small m-t-xs">
                                        <p>
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> Riviera State 32/106
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php
                            $user_id = $_SESSION['maged_sms']['user_id'];
                            $search_for_message = mysqli_query($con, "SELECT
  users.user_nickname,
  message.message_subject,
  message.message_id,
  message.message_content,
  message.created_date,
  message.read
FROM
  message
  INNER JOIN users ON message.from_user_id = users.user_id
WHERE
  message.to_user_id = '$user_id'
ORDER BY 
  message.message_id DESC ")or die(mysqli_error($con));
                            if (mysqli_num_rows($search_for_message) != 0) {

                                while($message = mysqli_fetch_assoc($search_for_message)) {
                                    ?>
                                    <a id="button" onclick="send_read_mark('<?php echo $message['message_id']?>');" data-key="9" data-toggle="tab" href="#message-<?php echo $message['message_id']?>">
                                        <li class="list-group-item">

                                                <small class="pull-right text-muted"> <?php echo $message['created_date']?></small>
                                                <strong><?php echo $message['user_nickname']?></strong>
                                                <div class="small m-t-xs">
                                                    <p class="m-b-xs">
                                                        <?php
                                                        echo decryptIt($message['message_subject']);
                                                        ?><br/>
                                                    </p>
                                                    <?php
                                                    if ($message['read']=='0'){
                                                    ?>
                                                        <p class="m-b-none">
                                                            <span class="label pull-right label-info">NEW</span>
                                                        </p>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                        </li>
                                    </a>
                                    <?php
                                }

                            } else {

                            }

                            ?>
                        </ul>
                    </div>
                </div>

                <div class="full-height">
                    <div class="full-height-scroll white-bg border-left">
                        <div class="element-detail-box">
                            <div class="tab-content">
                                <?php
                                $user_id = $_SESSION['maged_sms']['user_id'];
                                $search_for_message = mysqli_query($con, "SELECT
  users.user_nickname,
  message.message_subject,
  message.message_id,
  message.message_content,
  message.created_date,
  message.read
FROM
  message
  INNER JOIN users ON message.from_user_id = users.user_id
WHERE
  message.to_user_id = '$user_id'")or die(mysqli_error($con));
                                if (mysqli_num_rows($search_for_message) != 0) {

                                    while($message = mysqli_fetch_assoc($search_for_message)) {
                                        ?>
                                        <div id="message-<?php echo $message['message_id']?>" class="tab-pane">
                                            <h1>
                                                <?php
                                                echo decryptIt($message['message_subject']);
                                                ?>
                                            </h1>
                                            <p>
                                                <?php
                                                echo decryptIt($message['message_content']);
                                                ?>
                                            </p>
                                        </div>
                                        <?php
                                    }

                                } else {

                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        <div class="footer">
            <div>
                <strong>Copyright</strong> we.code  &copy; 2018
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script>
        function send_read_mark(id) {
            $.ajax({
                type: "POST",
                url: "php/view_message.php",
                data: "id="+id,
            });
        }
    </script>
    <script>
        <?php
        if ($_GET['backresult']=='0'){
        ?>
        $(document).ready(function() {
            Command: toastr["error"]("check username and password", "authentication error")
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        });
        <?php
        }elseif($_GET['backresult']=='1'){
        ?>
        Command: toastr["success"]("the email was sent successfully ", "Sent")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        <?php
        }
        ?>
    </script>
</body>
</html>
