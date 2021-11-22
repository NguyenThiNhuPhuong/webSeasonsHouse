
<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <title>zCTV</title>
     <link href="https://ctv-safety.toolkit.zaloapp.com/css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="https://ctv-safety.toolkit.zaloapp.com/css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="zCTV">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="NnZACIZwrqWDd9bqO8krLQ9U5Q7hx3EuoScdoXE7">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>

  <!-- common libraries. required for every page-->
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/popper.js/dist/umd/popper.js"></script>
<!--  <script src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js"></script> -->
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/jquery/dist/jquery.min.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/jquery-pjax/jquery.pjax.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/bootstrap/js/dist/util.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/slimScroll/jquery.slimscroll.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/widgster/widgster.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>
 <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
 <!-- common app js -->
  <script src="https://ctv-safety.toolkit.zaloapp.com/js/settings.js"></script>
  <script src="https://ctv-safety.toolkit.zaloapp.com/js/app.js"></script>
 <!-- page specific js -->

</head>
<body>
  <nav id="sidebar" class="sidebar" role="navigation">
      <div class="js-sidebar-content">
          <header class="logo d-none d-md-block">
              <a href="/home">zCTV</a>
          </header>
          <ul class="sidebar-nav">
              <li >
                  <a href="#sidebar-dashboard" data-toggle="collapse" data-parent="#sidebar">
                      <span class="icon">
                          <i class="fa fa-desktop"></i>
                      </span>
                      Home
                      <i class="toggle fa fa-angle-down"></i>
                  </a>
                  <ul id="sidebar-dashboard" class="collapse">
                      <!--<li ><a href="https://ctv-safety.toolkit.zaloapp.com/home">Home</a></li>-->
                      <li><a href="/dash/mon">CTV monitor</a></li>
                      <li><a href="/dash/checkUID">Check UID</a></li>
                      <li><a href="/dash/checkReport">Check reported</a></li>
                  </ul>
              </li>
              <li >
                  <a class="collapsed" href="#sidebar-lbs2" data-toggle="collapse" data-parent="#sidebar">
                      <span class="icon">
                          <i class="fa fa-globe"></i>
                      </span>
                      LBS
                      <i class="toggle fa fa-angle-down"></i>
                  </a>
                  <ul id="sidebar-lbs2" class="collapse">
                      <li><a href="/mon/lbs2/1">LBS 1</a></li>
                      <li><a href="/mon/lbs2/2">LBS 2</a></li>
                      <li><a href="/mon/lbs2/3">LBS 3</a></li>
                      <li><a href="/mon/lbs2/4">LBS 4</a></li>

                  </ul>
              </li>

               <li  class="active">
                  <a class="collapsed" href="#sidebar-zalobot" data-toggle="collapse" data-parent="#sidebar">
                      <span class="icon">
                          <i class="glyphicon glyphicon-eye-open"></i>
                      </span>
                      Zalobot
                      <i class="toggle fa fa-angle-down"></i>
                  </a>
                  <ul id="sidebar-zalobot" class="collapse">
                      <li><a href="/mon/zalobot/1">Zalobot 1</a></li>
                      <li><a href="/mon/zalobot/2">Zalobot 2</a></li>
                      <li><a href="/mon/zalobot/3">Zalobot 3</a></li>
                      <li><a href="/mon/zalobot/0">Zalobot Urgent !!! </a></li>
                  </ul>
              </li>


                      </ul>
      </div>
  </nav>
  <nav class="page-controls navbar navbar-dashboard">
      <div class="container-fluid">
          <div class="navbar-header mobile-hidden">
              <form class="navbar-form" role="search">

              </form>
              <ul class="nav navbar-nav float-right">
                  <li class="dropdown nav-item">
                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          Nguyễn Thị Như Phượng <i class="fa fa-cog fa-lg"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li><a class="dropdown-item" href="/home"><i class="glyphicon glyphicon-user"></i> &nbsp; My Account</a></li>
                          <li class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/home">Calendar</a></li>
                          <li><a class="dropdown-item" href="/home">Inbox &nbsp;&nbsp;<span class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
                          <li class="dropdown-divider"></li>
                          <li>
				<!--<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out"></i> &nbsp; Log Out</a> -->
	<a class="dropdown-item" href="https://ctv-safety.toolkit.zaloapp.com/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="https://ctv-safety.toolkit.zaloapp.com/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="NnZACIZwrqWDd9bqO8krLQ9U5Q7hx3EuoScdoXE7">                                    </form>
			</li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <div class="content-wrap">
          <style>
        div.scrollable {
            width: 100%;
            height: 300px;
            margin: 0;
            padding: 0;
            overflow-y: auto;
        }

        .container .row {
            margin: 0;
        }

        .card {
            position: relative;
            margin: 0.5rem 0 1rem 0;
            background-color: #fff;
            transition: box-shadow .25s;
            border-radius: 2px;
            margin-bottom: 0px;
            margin-top: 1px;
        }

        .card .card-content {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 2px;
            padding-bottom: 2px;
            border-radius: 0 0 2px 2px;
        }

        .clearfix {
            zoom: 1;
        }

        ul.gallery {
            margin: 5px;
            margin-top: 7px;
            padding: 0;
        }

        ul.gallery li {
            margin: 5px 4px;
            padding: 0;
            list-style: none;
            display: inline-block;
            position: relative;
            background: url(../images/pattern/2.png) 0 0;
        }

        .highlight_kw {
            color: red;
            font-weight: bold;
            border: solid 1px #001;
        }
    </style>
    <main id="content" class="content" role="main">

    <h1 class="page-title">Zalobot - <span class="fw-semi-bold">Urgent  </span>
            <button id="load_control" class="btn btn-primary"><span class="glyphicon"></span> Click để bắt đầu trực
            </button>
        </h1>

        <section class="widget">

            <div class="widget-body">

                <div class="col-md-4 float-md-left">

                    <div id=last_f5></div>
                    <form action="">
                        <input type="checkbox" id="chk_zalobot1" name="urgent_list" value="1"> <label
                            for="chk_zalobot1">Zalobot1</label><br>
                        <input type="checkbox" id="chk_zalobot2" name="urgent_list" value="2"> <label
                            for="chk_zalobot2">Zalobot2</label>

                    </form>
                    <div id=warning_text style="display:none"><b><p style="font-size:30px;color:red;">Remove để load
                                tiếp, Không đợi !!!</p></b></div>

                    <button class="button-remove btn btn-primary" id="button-remove-page"><span
                            class="glyphicon glyphicon-trash"></span> Remove current page
                    </button>
                </div>
                <div class="col-md-10 float-md-right">
                    <div class="col-md-2 float-md-right">
                        <label>Ban LBS</label>
                        <textarea rows="4" class="form-control" id="list-uid-lbs"></textarea>
                        <button id="button-ban-lbs" class="btn btn-primary"
                                onclick="window.open('https://toolkit.zaloapp.com/v3/banfeature/multi/detail?uid='+ $('#list-uid-lbs').val()+'&reason=kickout+lbs+zalobot', '_blank',)">
                            <span class="glyphicon glyphicon-user"></span> Ban LBS
                        </button>
                        <button id="button-clear-list-lbs" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Clear list LBS
                        </button>
                    </div>
                    <div class="col-md-2 float-md-right">
                        <label>Group list</label>
                        <textarea rows="4" class="form-control" id="list-group-id"></textarea>
                        <button id="button-ban-group" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Ban group
                        </button>
                        <button id="button-clear-list-content" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Clear list banned
                        </button>
                    </div>
                    <div class="col-md-2 float-md-right">
                        <label>Illegal</label>
                        <textarea rows="4" class="form-control" id="list-uid-illegal"></textarea>
                        <button id="button-ban-illegal" class="btn btn-primary"><span
                                onclick="window.open('https://toolkit.zaloapp.com/v3/banuser/multi/detail?mode=4&amp;uid='+ $('#list-uid-illegal').val()+'&reason=illegal+zalobot&timeban=7', '_blank',)">
                            <span class="glyphicon glyphicon-user"></span> Ban multi
                        </button>
                        <button id="button-clear-list-illegal" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Clear list banned
                        </button>
                    </div>
                    <div class="col-md-2 float-md-right">
                        <label>Dirty 2(Sex)</label>
                        <textarea rows="4" class="form-control" id="list-uid-sex"></textarea>
                        <button id="button-ban-sex" class="btn btn-primary"
                                onclick="window.open('https://toolkit.zaloapp.com/v3/banuser/multi/detail?mode=1&amp;uid='+ $('#list-uid-sex').val()+'&reason=Post+sex+zalobot&timeban=7', '_blank',)">
                            <span class="glyphicon glyphicon-user"></span> Ban multi
                        </button>
                        <button id="button-clear-list-sex" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Clear list banned
                        </button>
                    </div>
                    <div class="col-md-2 float-md-right">
                        <label>Mai dam</label>
                        <textarea rows="4" class="form-control" id="list-uid"></textarea>
                        <button id="button-ban" class="btn btn-primary"
                                onclick="window.open('https://toolkit.zaloapp.com/v3/banuser/multi/detail?mode=2&amp;uid='+ $('#list-uid').val()+'&reason=Nội+dung+nhạy+cảm+zalobot&timeban=7', '_blank',)">
                            <span class="glyphicon glyphicon-user"></span> Ban multi
                        </button>
                        <button id="button-clear-list-uid" class="btn btn-primary"><span
                                class="glyphicon glyphicon-trash"></span> Clear list banned
                        </button>
                    </div>
                </div>

                <div class="mt">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th width="5%">STT</th>
                            <th width="10%">Avatar</th>
                            <th width="10%">Cover</th>
                            <th width="10%">Status</th>
                            <th width="65%">Feed</th>
                        </tr>
                        </thead>
                    </table>
                    <div id=warning_text2 style="display:none"><b><p style="font-size:30px;color:red">Remove để load
                                tiếp, Không đợi !!!</p></b></div>
                    <button class="button-remove btn btn-primary"><span class="glyphicon glyphicon-trash"></span> Remove
                        current page
                    </button>
                </div>
            </div>
        </section>

        <footer class="content-footer">
        zCTV - H2/2018</a>
</footer>    </main>
  </div>

  <div class="loader-wrap hiding hide">
      <i class="fa fa-circle-o-notch fa-spin-fast"></i>
  </div>


    <!-- page specific libs -->
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/underscore/underscore-min.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/backbone/backbone.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/backbone.paginator/lib/backbone.paginator.min.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/backgrid/lib/backgrid.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/backgrid-paginator/backgrid-paginator.js"></script>
    <!--<script src="https://ctv-safety.toolkit.zaloapp.com/vendor/datatables/media/js/jquery.dataTables.js"></script>!-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <script src="https://ctv-safety.toolkit.zaloapp.com/js/messenger.js"></script>
    <script src="https://ctv-safety.toolkit.zaloapp.com/js/messenger-theme-flat.js"></script>

    <!-- page specific js -->
    <!--<script src="https://ctv-safety.toolkit.zaloapp.com/js/tables-dynamic.js"></script>-->

    <script>

        var list_uid = [];
        var list_uid_lbs = [];
        var list_group_id = [];
        var list_uid_sex = [];
        var list_uid_illegal = [];
        var id_local = 0;
        var loading = 2;
        var t = $('#example').DataTable({
            "lengthMenu": [[50], [50]]
        });

        function update_list_uid() {
            var tmp = "";
            $.each(list_uid, function (i, value) {
                tmp += value + ";";
            });
            // console.log(tmp);
            $('#list-uid').val(tmp);
        }

        function update_list_uid_lbs() {
            var tmp = "";
            $.each(list_uid_lbs, function (i, value) {
                tmp += value + ";";
            });
            // console.log(tmp);
            $('#list-uid-lbs').val(tmp);
        }

        function check_in_array(arr, val) {
            var ok = 0;
            var count = 0;
            for (i = 0; i < arr.length; i++) {
                if (arr[i] === val) {
                    return i + 1;
                }
            }
            return ok;
        }


        $('#button-clear-list-uid').click(function () {
            var r = confirm("Are you sure !");
            if (r == true) {
                list_uid = [];
                update_list_uid_v2(1);
            }
        });

        $('#button-clear-list-lbs').click(function () {
            var r = confirm("Are you sure !");
            if (r == true) {
                list_uid_lbs = [];
                update_list_uid_v2(2);
            }
        });

        $('#button-clear-list-content').click(function () {
            var r = confirm("Are you sure !");
            if (r == true) {
                list_group_id = [];
                update_list_uid_v2(3);
            }
        });
        $('#button-clear-list-illegal').click(function () {
            var r = confirm("Are you sure !");
            if (r == true) {
                list_uid_illegal = [];
                update_list_uid_v2(5);
            }
        });
        $('#button-ban-group').click(function () {
            $.ajax({
                type: 'post',
                url: '/mon/msg/group',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'msg': $('#list-group-id').val(),
                },
                success: function (data_r) {
                    if ((data_r.errors)) {
                        alert("Error !");
                    } else {
                        if (data_r.status == 0) {
                            alert("Done, you are able to clear now !");
                        }
                    }
                }
            });//
        });


        $('#button-clear-list-sex').click(function () {
            var r = confirm("Are you sure !");
            if (r == true) {
                list_uid_sex = [];
                update_list_uid_v2(4);
            }
        });

        $('#load_control').click(function () {
            var sourceUrgent = [];
            $("input[name='urgent_list']:checked").each(function () {
                sourceUrgent.push($(this).val());
            });

            if (sourceUrgent.length == 0) {
                alert("Chưa chọn zalobot nào !");
            } else {

            if (loading == 1) {
                loading = 0;
                $('#load_control').text("Đang KHÔNG trực");
                highlightAI();
            } else {
                if (loading == 2) {
                    loading = 1;
                    $('#load_control').text("Đang trực. Loading ...");
                    worker();
                    highlightAI();
                } else {
                    //console.log("bbb");
                    loading = 1;
                    $('#load_control').text("Đang trực. Loading ...");
                    highlightAI();
                }
            }
        }
        });

        $(".btn").click(function () {
            if ($(this).hasClass("course-btn-tab-selected"))
                $(".btn").removeClass("course-btn-tab-selected").addClass("course-btn-tab");
            ;
            $(this).addClass("course-btn-tab-selected");
        });

        var select_bt = "<button class=\"select-lbs btn height-50 btn-inverse mb-xs\" data-id=\"xxxidxxx\"><span class=\"glyphicon glyphicon-ok\"></span> LBS </button></br><button class=\"select-ticket btn height-100 btn-inverse mb-xs\" data-id=\"xxxidxxx\"><span class=\"glyphicon glyphicon-ok\"></span> Md </button></br><button class=\"select-sex btn height-100 btn-inverse mb-xs\" data-id=\"xxxidxxx\"><span class=\"glyphicon glyphicon-ok\"></span> Sex </button></br><button class=\"select-illegal btn height-100 btn-inverse mb-xs\" data-id=\"xxxidxxx\"><span class=\"glyphicon glyphicon-ok\"></span> illegal </button>"

        var select_group_bt = "<button class=\"select-ticket btn height-100 btn-inverse mb-xs\" data-id=\"xxxidxxx\"><span class=\"glyphicon glyphicon-ok\"></span> Group dirty </button>"

        function find_btn_uid(id, action) {
            //action : 0 changed to select, 1 changed to selected
            $('.select-ticket').each(function (i, obj) {
                tmp = $(this).data('id').split(":");
                local_id = tmp[0];
                if (local_id == id) {
                    if (action == 0) {
                        $(this).removeClass("select-ticket btn height-100 btn-danger btn-block mb-xs").addClass("select-ticket btn height-100 btn-inverse mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-ok\"></span>  Md");
                    }
                    if (action == 1) {
                        $(this).removeClass("select-ticket btn height-100 btn-inverse mb-xs").addClass("select-ticket btn height-100 btn-danger btn-block mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-remove\"></span> Md");
                    }
                }
            });
        }
        function find_btn_illegal(id, action) {
            //action : 0 changed to select, 1 changed to selected
            $('.select-illegal').each(function (i, obj) {
                tmp = $(this).data('id').split(":");
                local_id = tmp[0];
                if (local_id == id) {
                    if (action == 0) {
                        $(this).removeClass("select-illegal btn height-100 btn-danger btn-block mb-xs").addClass("select-illegal btn height-100 btn-inverse mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-ok\"></span>  illegal");
                    }
                    if (action == 1) {
                        $(this).removeClass("select-illegal btn height-100 btn-inverse mb-xs").addClass("select-illegal btn height-100 btn-danger btn-block mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-remove\"></span> illegal");
                    }
                }
            });
        }
        function find_btn_lbs(id, action) {
            //action : 0 changed to select, 1 changed to selected
            $('.select-lbs').each(function (i, obj) {
                tmp = $(this).data('id').split(":");
                local_id = tmp[0];
                if (local_id == id) {
                    if (action == 0) {
                        $(this).removeClass("select-lbs btn height-50 btn-danger btn-block mb-xs").addClass("select-lbs btn height-50 btn-inverse mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-ok\"></span> LBS");
                    }
                    if (action == 1) {
                        $(this).removeClass("select-lbs btn height-50 btn-inverse mb-xs").addClass("select-lbs btn height-50 btn-danger btn-block mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-remove\"></span>LBS");
                    }
                }
            });
        }

        function find_btn_sex(id, action) {
            //action : 0 changed to select, 1 changed to selected
            $('.select-sex').each(function (i, obj) {
                tmp = $(this).data('id').split(":");
                local_id = tmp[0];
                if (local_id == id) {
                    if (action == 0) {
                        $(this).removeClass("select-sex btn height-50 btn-danger btn-block mb-xs").addClass("select-sex btn height-50 btn-inverse mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-ok\"></span> Sex");
                    }
                    if (action == 1) {
                        $(this).removeClass("select-sex btn height-50 btn-inverse mb-xs").addClass("select-sex btn height-50 btn-danger btn-block mb-xs");
                        $(this).html("<span class=\"glyphicon glyphicon-remove\"></span>Sex");
                    }
                }
            });
        }

        function update_list_uid_v2(source) {
            if (source >= 1 && source <= 5) {
                var list_local = [];
                var div_list = "";
                if (source == 1) {
                    list_local = list_uid;
                    div_list = '#list-uid';
                }
                if (source == 2) {
                    list_local = list_uid_lbs;
                    div_list = '#list-uid-lbs';
                }
                if (source == 3) {
                    list_local = list_group_id;
                    div_list = '#list-group-id';
                }
                if (source == 4) {
                    list_local = list_uid_sex;
                    div_list = '#list-uid-sex';
                }
                if (source == 5) {
                    list_local = list_uid_illegal;
                    div_list = '#list-uid-illegal';
                }
                var tmp = "";
                $.each(list_local, function (i, value) {
                    tmp += value + ";";
                });
                // console.log(tmp);
                $(div_list).val(tmp);
            }

        }

        $(document).on('click', '.select-ticket', function () {
            id_raw = $(this).data('id');
            tmp = id_raw.split(":");
            id = tmp[0];
            console.log(id_raw + "-->" + tmp[0]);

            if (tmp[1] == "200") {
                var po1 = check_in_array(list_group_id, id);
                if (po1 > 0) {
                    list_group_id.splice(po1 - 1, 1);
                    find_btn_uid(id, 0);
                } else {
                    list_group_id.push(id);
                    find_btn_uid(id, 1);
                }
                update_list_uid_v2(3);
            } else {
                var po1 = check_in_array(list_uid, id);
                if (po1 > 0) {
                    list_uid.splice(po1 - 1, 1);
                    find_btn_uid(id, 0);
                } else {
                    list_uid.push(id);
                    find_btn_uid(id, 1);
                }
                update_list_uid_v2(1);
            }
        });

        $(document).on('click', '.select-lbs', function () {
            id_raw = $(this).data('id');
            tmp = id_raw.split(":");
            id = tmp[0];
            var po1 = check_in_array(list_uid_lbs, id);
            //console.log(po1);
            if (po1 > 0) {
                //$(this).removeClass("select-ticket btn height-100 btn-danger btn-block").addClass("select-ticket btn height-100 btn-inverse");
                //$(this).html("<span class=\"glyphicon glyphicon-ok\"></span>  Select");
                list_uid_lbs.splice(po1 - 1, 1);
                find_btn_lbs(id, 0);
            } else {
                //$(this).removeClass("select-ticket btn height-100 btn-inverse").addClass("select-ticket btn height-100 btn-danger btn-block");
                //$(this).html("<span class=\"glyphicon glyphicon-remove\"></span> Selected");
                list_uid_lbs.push(id);
                find_btn_lbs(id, 1);
            }
            //console.log(list_uid);
            update_list_uid_lbs();
        });


        $(document).on('click', '.select-sex', function () {
            id_raw = $(this).data('id');
            tmp = id_raw.split(":");
            id = tmp[0];
            var po1 = check_in_array(list_uid_sex, id);
            if (po1 > 0) {
                list_uid_sex.splice(po1 - 1, 1);
                find_btn_sex(id, 0);
            } else {
                list_uid_sex.push(id);
                find_btn_sex(id, 1);
            }
            //console.log(list_uid);
            update_list_uid_v2(4);
        });
        $(document).on('click', '.select-illegal', function () {
            id_raw = $(this).data('id');
            tmp = id_raw.split(":");
            id = tmp[0];
            var po1 = check_in_array(list_uid_illegal, id);
            if (po1 > 0) {
                list_uid_illegal.splice(po1 - 1, 1);
                find_btn_illegal(id, 0);
            } else {
                list_uid_illegal.push(id);
                find_btn_illegal(id, 1);
            }
            //console.log(list_uid);
            update_list_uid_v2(5);
        });
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&amp;/g, "&")
                .replace(/&lt;/g, "<")
                .replace(/&gt;/g, ">")
                .replace(/&quot;/g, "\"")
                .replace(/&#039;/g, "\'")
                .replace(/500px/g, "700px");
        }

        function worker() {
            //console.log("Refresh at "+t.rows()[0].length);

            if (t.data().length > 0) {
                $('#load_control').text("Remove để load tiếp. Không đợi !!!");
                $('#warning_text').show();
                $('#warning_text2').show();
            }
            if (t.data().length == 0) {
                $('#load_control').text("Đang trực. Loading ...");
                $('#warning_text').hide();
                $('#warning_text2').hide();
                getKw();
                highlightAI();
            }
            var sourceUrgent = [];
            $("input[name='urgent_list']:checked").each(function () {
                sourceUrgent.push($(this).val());
            });
            if (sourceUrgent.length > 0) {
                var data = {
                    '_token': $('input[name=_token]').val(),
                    'id': id_local,
                    'sourceUrgent': sourceUrgent,
                };
            } else {
                $('#load_control').text("Chưa chọn zalobot !!!");
            }
            if ((loading == 1) && (t.data().length == 0) && (sourceUrgent.length > 0)) {
                if (t.data().length == 0) {
                    id_local = 0;
                }

                var ti = new Date();
                // console.log("Refresh at "+ti.toLocaleString());
                $('#last_f5').text("Last update: " + ti.toLocaleString());
                $.ajax({
                    type: 'post',
                    url: '/mon/req/zalobot/0',
                    data: data,
                    success: function (data_r) {
                        if ((data_r.errors)) {
                            alert("Error !");
                        } else {

                            if (data_r.size > 0) {
                                $.each(data_r.ticket, function (i, value) {
                                    id_local = value.uid + ":" + value.source + ":" + value.time;
                                    avatar = value.avatar.replace("s120.avatar.talk", "s240.avatar.talk");
                                    if (value.source == 200) {
                                        tmp = select_group_bt.replace(/xxxidxxx/g, value.uid + ":" + value.source);
                                        avatar_div = '<img src="' + avatar + '" style="max-width: 350px"><b><br><span class="fw-semi-bold abc" style="font-size:20px">' + value.displayname + '</span></b><br>GID:' + value.uid;
                                        cover_div = '<img src="' + value.cover + '" style="max-width: 350px"></a>';
                                        status_div = value.status;
                                    } else {
                                        tmp = select_bt.replace(/xxxidxxx/g, value.uid + ":" + value.source);
                                        avatar_div = '<a href="https://toolkit.zaloapp.com/v3/profile?user_id=' + value.uid + '" target="_blank"><img src="' + avatar + '" style="max-width: 350px"></a><b><br><span class="fw-semi-bold abc" style="font-size:20px">' + value.displayname + '</span></b><br><a href="https://toolkit.zaloapp.com/v3/profile?user_id=' + value.uid + '" target="_blank">' + value.uid + '</a>';
                                        cover_div = '<a href="https://toolkit.zaloapp.com/v3/banuser/detail?uid=' + value.uid + '" target="_blank"><img src="' + value.cover + '" style="max-width: 350px"></a>';
                                        status_div = '<p class="abc" style="font-size:15px;word-break: break-all;">' + escapeHtml(value.status) + '</p>';
                                    }


                                    if (t.data().length < 50) {
                                        var rowNode = t.row.add([tmp, avatar_div, cover_div, status_div, '<span class="fw-semi-bold abc" style="font-size:20px">' + value.displayname + '</span></b><br><p class="abc" style="font-size:15px">' + escapeHtml(value.status) + '</p>' + escapeHtml(value.feed) + '</div>']).node();
                                        $(rowNode).attr("id", value.uid + ":" + value.source + ":" + value.time + ":" + value.srcUI);
                                        t.draw(false);
                                    }
                                });
                            }
                            if (data_r.lastRem_zalobot2 != "N/A") {
                                Messenger().post({
                                    message: 'Zalobot 2 lần cuối trực: ' + data_r.lastRem_zalobot2 + " phút trước",
                                    //type: 'error',
                                    showCloseButton: true
                                });
                            }
                            if (data_r.lastRem_zalobot1 != "N/A") {
                                Messenger().post({
                                    message: 'Zalobot 1 lần cuối trực: ' + data_r.lastRem_zalobot1 + " phút trước",
                                    //type: 'error',
                                    showCloseButton: true
                                });
                            }
                        }
                    }
                });//
                getKw();
                highlightAI();
            }
            if (loading == 1) {
                if (t.data().length == 0) {
                    id_local = 0;
                }
                var ti = new Date();
                // console.log("Refresh at "+ti.toLocaleString());
                $('#last_f5').text("Last update: " + ti.toLocaleString());
                $.ajax({
                    type: 'post',
                    url: '/mon/req/zalobot/0',
                    data: data,
                    success: function (data_r) {
                        if ((data_r.errors)) {
                            alert("Error !");
                        } else {
                            if (data_r.lastRem_zalobot3 != "N/A") {
                                Messenger().post({
                                    message: 'Zalobot 3 lần cuối trực: ' + data_r.lastRem_zalobot3 + " phút trước",
                                    //type: 'error',
                                    id: "Zalobot3",
                                    showCloseButton: true
                                });
                            }
                            if (data_r.lastRem_zalobot2 != "N/A") {
                                Messenger().post({
                                    message: 'Zalobot 2 lần cuối trực: ' + data_r.lastRem_zalobot2 + " phút trước",
                                    //type: 'error',
                                    id: "Zalobot2",
                                    showCloseButton: true
                                });
                            }
                            if (data_r.lastRem_zalobot1 != "N/A") {
                                Messenger().post({
                                    message: 'Zalobot 1 lần cuối trực: ' + data_r.lastRem_zalobot1 + " phút trước",
                                    //type: 'error',
                                    id: "Zalobot1",
                                    showCloseButton: true
                                });
                            }
                            if (data_r.lastRem_lbs1 != "N/A") {
                                Messenger().post({
                                    message: 'LBS 1 lần cuối trực: ' + data_r.lastRem_lbs1 + " phút trước",
                                    //type: 'error',
                                    id: "LBS1",
                                    showCloseButton: true
                                });
                            }
                            if (data_r.lastRem_lbs2 != "N/A") {
                                Messenger().post({
                                    message: 'LBS 2 lần cuối trực: ' + data_r.lastRem_lbs2 + " phút trước",
                                    //type: 'error',
                                    id: "LBS2",
                                    showCloseButton: true
                                });
                            }
                        }
                    }
                });//
            }
            highlightAI();
            setTimeout(worker, 1000); // you could choose not to continue on failure...
        }

        function getKw() {
            $.ajax({
                type: 'get',
                url: '/api/getKw',
                dataType: 'text',
                data: [],
                success: function (data_r) {
                    //console.log(data_r);
                    var codes = JSON.parse(data_r);
                    var kw = [];
                    for (i = 0; i < codes.length; i++) {
                        kw[i] = codes[i].kw;
                        //console.log(codes[i].kw);
                    }
                    $('.show_feed').html(function () {
                        str_text = $(this).text();
                        for (i = 0; i < kw.length; i++) {
                            var re = new RegExp(kw[i], "giu");
                            if (re.test(str_text)) {
                                str_text = str_text.replace(re, '<span class="highlight_kw">' + kw[i] + '</span>');
                                $(this).parent().css({
                                    "border": "3px solid red",
                                    "padding": "5px",
                                    "font-weight": "bold",
                                });
                                $(this).parent().parent().parent().parent().parent().parent().parent().parent().css({
                                    "background-color": "#f7cccc",
                                });
                            }
                        }

                        return str_text;
                    });

                    $('.abc').html(function () {
                        str_text = $(this).text();
                        for (i = 0; i < kw.length; i++) {
                            var re = new RegExp(kw[i], "giu");
                            if (re.test(str_text)) {
                                str_text = str_text.replace(re, '<span class="highlight_kw">' + kw[i] + '</span>');
                                $(this).parent().parent().css({
                                    "background-color": "#f7cccc",
                                });
                            }
                        }

                        return str_text;
                    });
                }
            });
        }

        $(document).ready(function () {
            $('#warning_text').hide();
            $('#warning_text2').hide();

            var counter = 1;


            $('#example_nonono tbody').on('click', 'tr', function () {
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                } else {
                    //   t.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                    console.log($(this).attr('id'));
                }
            });

            $('.button-remove').click(function () {
                var r = confirm("Are you sure !");
                if (r == true) {
                    //t.rows('.selected').remove().draw( false );
                    var tmp = "";
                    $.each(t.rows({page: 'current'}).nodes().to$(), function (i, value) {
                        //console.log($(this).attr('id'));
                        var id = $(this).attr('id').replace("_", ":");
                        tmp += id + ";";
                        // console.log(tmp);
                    });
                    //console.log(t.rows({ page: 'current' }).nodes().to$().attr('id'));

                    console.log(tmp);
                    if (tmp.length > 0) {
                        $("#button-remove-page").hide();
                        $.ajax({
                            type: 'post',
                            url: '/mon/req/zalobot/rem/0',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'ids': tmp,
                            },
                            success: function (data_r) {
                                if ((data_r.errors)) {
                                    alert("Error !");
                                } else {
                                    console.log(data_r);
                                    if (data_r.status == "0") {
                                        t.rows({page: 'current'}).remove().draw(false);
                                    } else {
                                        alert("errors");
                                    }
                                }
                                $("#button-remove-page").show();
                                if (t.data().length == 0) {
                                    $('#load_control').text("Đang trực. Loading ...");
                                    $('#warning_text').hide();
                                    $('#warning_text2').hide();
                                }
                            }
                        });
                    }
                }
            });


            // Automatically add a first row of data
            // $('#load_data').click();

            //  <img src="http://cover.talk.zdn.vn/0/5/f/2/16/d8f70f5baaa30079e868937c5590d057.jpg" style="max-width: 120px">
        });

        //Highligh Source AI Detected
        function highlightAI() {
            $('.ai_detect').html(function () {
                var x = this.tagName;
                console.log(x);
                if (x == "IMG") {
                    $(this).parent().parent().css({
                        "background-color": "#f7cccc",
                        "border-style": "groove",
                        "border-color": "red",
                    });
                } else if (x == "VIDEO") {
                    $(this).parent().parent().css({
                        "background-color": "#f7cccc",
                        "border-style": "groove",
                        "border-color": "red",
                    });
                }
            });
        }

        //end script

    </script>

</body>
</html>

