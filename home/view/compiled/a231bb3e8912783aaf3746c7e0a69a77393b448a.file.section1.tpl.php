<?php /* Smarty version Smarty-3.1.16, created on 2016-03-12 12:29:01
         compiled from "../home/view/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174576924155861f779bf404-77633021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a231bb3e8912783aaf3746c7e0a69a77393b448a' => 
    array (
      0 => '../home/view/section1.tpl',
      1 => 1457810178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174576924155861f779bf404-77633021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55861f779c6297_44554706',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55861f779c6297_44554706')) {function content_55861f779c6297_44554706($_smarty_tpl) {?><div class="row-fluid sortable">
    
    <div class="box span4">
            <div class="box-header well">
                    <h2><i class="icon-th"></i> Tabs</h2>
                    <div class="box-icon">
                            <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                    </div>
            </div>
            <div class="box-content">
                    <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#info">Info</a></li>
                            <li><a href="#custom">Custom</a></li>
                            <li><a href="#messages">Messages</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active" id="info">
                                    <h3>Charisma <small>a fully featued template</small></h3>
                                    <p>Its a fully featured, responsive template for your admin panel. Its optimized for tablet and mobile phones. Scan the QR code below to view it in your mobile device.</p> <img alt="QR Code" class="charisma_qr center" src="img/qrcode136.png" />
                            </div>
                            <div class="tab-pane" id="custom">
                                    <h3>Custom <small>small text</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
                            </div>
                            <div class="tab-pane" id="messages">
                                    <h3>Messages <small>small text</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor.</p>
                            </div>
                    </div>
            </div>
    </div><!--/span-->
    
    
    <div class="box span4">
            <div class="box-header well" data-original-title>
                    <h2><i class="icon-user"></i> Member Activity</h2>
                    <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                    </div>
            </div>
            <div class="box-content">
                    <div class="box-content">
                            <ul class="dashboard-list">
                                    <li>
                                            <a href="#">
                                                    <img class="dashboard-avatar" alt="Usman" src="http://www.gravatar.com/avatar/<<?php ?>?php echo md5( strtolower( trim( "usman@halalit.net" ) ) ); ?<?php ?>>.png?s=50"></a>
                                                    <strong>Name:</strong> <a href="#">Usman
                                            </a><br>
                                            <strong>Since:</strong> 17/05/2012<br>
                                            <strong>Status:</strong> <span class="label label-success">Approved</span>                                  
                                    </li>
                                    <li>
                                            <a href="#">
                                                    <img class="dashboard-avatar" alt="Sheikh Heera" src="http://www.gravatar.com/avatar/<<?php ?>?php echo md5( strtolower( trim( "heerasheikh@ymail.com" ) ) ); ?<?php ?>>.png?s=50"></a>
                                                    <strong>Name:</strong> <a href="#">Sheikh Heera
                                            </a><br>
                                            <strong>Since:</strong> 17/05/2012<br>
                                            <strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
                                    </li>
                                    <li>
                                            <a href="#">
                                                    <img class="dashboard-avatar" alt="Abdullah" src="http://www.gravatar.com/avatar/<<?php ?>?php echo md5( strtolower( trim( "abdullah123456@abc.com" ) ) ); ?<?php ?>>.png?s=50"></a>
                                                    <strong>Name:</strong> <a href="#">Abdullah
                                            </a><br>
                                            <strong>Since:</strong> 25/05/2012<br>
                                            <strong>Status:</strong> <span class="label label-important">Banned</span>                                  
                                    </li>
                                    <li>
                                            <a href="#">
                                                    <img class="dashboard-avatar" alt="Saruar Ahmed" src="http://www.gravatar.com/avatar/<<?php ?>?php echo md5( strtolower( trim( "saruarall@gmail.com" ) ) ); ?<?php ?>>.png?s=50"></a>
                                                    <strong>Name:</strong> <a href="#">Saruar Ahmed
                                            </a><br>
                                            <strong>Since:</strong> 17/05/2012<br>
                                            <strong>Status:</strong> <span class="label label-info">Updates</span>                                  
                                    </li>
                            </ul>
                    </div>
            </div>
    </div><!--/span-->    
    
    
    <div class="box span4">
            <div class="box-header well" data-original-title>
                    <h2><i class="icon-list-alt"></i> Realtime Traffic</h2>
                    <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                            <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                    </div>
            </div>
            <div class="box-content">
                    <div id="realtimechart" style="height:190px;"></div>
                            <p class="clearfix">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
                            <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
            </div>
    </div><!--/span-->
    
</div><!--/row-->    <?php }} ?>
