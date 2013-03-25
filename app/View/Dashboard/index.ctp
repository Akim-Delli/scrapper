<?php echo $this->Html->script('http://code.highcharts.com/highcharts.js'); ?>
<?php echo $this->Html->script('charts/eservices-highcharts'); ?>
<div class="container-fluid" >
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-signal"></i>
                    </span>
                    <h5>Project Statistics</h5>
                    <div class="buttons">
                        <a class="btn btn-mini" href="#">
                            <i class="icon-refresh"></i>
                            Update
                        </a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="row-fluid">
                        <div class="span4">
                            <ul class="site-stats">
                            <li>
                            <i class="icon-user"></i>
                            <strong>1433</strong>
                            <small>Total Users</small>
                            </li>
                            <li>
                            <i class="icon-arrow-right"></i>
                            <strong>16</strong>
                            <small>New Users (last week)</small>
                            </li>
                            <li class="divider"></li>
                            <li>
                            <i class="icon-shopping-cart"></i>
                            <strong>259</strong>
                            <small>Total Shop Items</small>
                            </li>
                            <li>
                            <i class="icon-tag"></i>
                            <strong>8650</strong>
                            <small>Total Orders</small>
                            </li>
                            <li>
                            <i class="icon-repeat"></i>
                            <strong>29</strong>
                            <small>Pending Orders</small>
                            </li>
                            </ul>
                        </div>
                        <div class="span8">
                            <div class="widget-content chart" id="container-charts" style="padding: 0px; position: relative; width:100%; height:400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


